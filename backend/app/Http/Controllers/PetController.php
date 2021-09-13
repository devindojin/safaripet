<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Carbon;
use App\Models\PetImageId;
use App\Models\PinogyApi;
use POClient;

use Image;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $end_url;
    private $filterenab_accskey;
    private $filterenab_srckey;
    private $filterenab_pwdkey;
    private $filterenab_apikey;
    private $po_client;
    private $isPrice;

    public function __construct() {
        $pinogy_settings = PinogyApi::find(1);
        $this->end_url = $pinogy_settings->endurl;;
        $this->filterenab_accskey = $pinogy_settings->accskey;
        $this->filterenab_srckey = $pinogy_settings->srckey;
        $this->filterenab_pwdkey = $pinogy_settings->pwdkey;
        $this->filterenab_apikey = $pinogy_settings->apikey;
        $this->isPrice = $pinogy_settings->price;

        $this->po_client = new POClient($this->end_url, ''.$this->filterenab_accskey.'', ''.$this->filterenab_srckey.'');
        $this->po_client->sign_in(''.$this->filterenab_pwdkey.'', ['app_id' => $this->filterenab_apikey]);
    }

    public function __destruct() {
        $this->po_client->sign_out();
    }

    public function index(Request $request)
    {
        $search_param = [];
        $search_param['qp_pstatus_name'] = "Available";
        $search_param['order_by'] = "pbrd_display_name";

        if ($request->has('location') && !empty($request->location)) {
            $search_param['qp_pet_currently_at_entity_id'] = $request->location;
        }
        if ($request->has('gender') && !empty($request->gender)) {
            if($request->gender == 1) {
                $gender = "Male";
            } elseif($request->gender == 2) {
                $gender = "Female";
            }
            $search_param['qp_pet_gender'] = $gender;   
        }
        if ($request->has('breed') && !empty($request->breed)) {
            $search_param['qp_pbrd_display_name'] = $request->breed; 
        }
        $res = $this->po_client->request('post', '/apps/pet_tracker/queries/read__qpt__list_pets', $search_param);
        
        $petDataArr = $res->json['objects'];
        $petDataListArr = array();
        
        $petdata = array();
        $i = 0;
        foreach($petDataArr as $petDataVal){
            if(is_array($petDataVal['pet_image_file_ids']) && count($petDataVal['pet_image_file_ids'])>0) {
                $pet_id = $petDataVal['pet_id'];
                $countpetid = PetImageId::where(['pet_id'=>$pet_id])->count();
                
                if($countpetid==0) {
                    $petdata[$i]['pet_id'] = $petDataVal['pet_id'];
                    $petdata[$i]['pet_display_name'] = $petDataVal['pbrd_display_name'];
                    $petdata[$i]['status'] = 0;
                }
            }
            if($petDataVal['pstatus_name']=="Available") {
                $date = Carbon::now();
                $dateOfBirth = $petDataVal['plttr_birthdate'][0];
                $status_name = "Available";
            } else if($petDataVal['pstatus_name'] == "On Layaway") {
                $status_name="Deposit";
            }elseif($date->diffInWeeks($dateOfBirth)>12){
                $status_name="Sale";
            }
            // create array for listing page
            $petDataListArr[$i]['pet_id'] = $petDataVal['pet_id'];
            $petDataListArr[$i]['pet_image_file_ids'] = is_array($petDataVal['pet_image_file_ids'])?$petDataVal['pet_image_file_ids'][0]:"";
            $petDataListArr[$i]['pbrd_display_name'] = $petDataVal['pbrd_display_name'];
            $petDataListArr[$i]['pstatus_name'] = $status_name;
            $petDataListArr[$i]['pbrd_display_name'] = $petDataVal['pbrd_display_name'];
            $petDataListArr[$i]['loc_addr_city'] = $petDataVal['loc_addr_city'];
            $petDataListArr[$i]['pet_age'] = $petDataVal['pet_age'];
            $petDataListArr[$i]['pet_gender'] = $petDataVal['pet_gender'];
            $i++;
        }
        $petDataListJsonArr = json_encode($petDataListArr);
        $petimgres = PetImageId::insert($petdata);
        
        $this->get_image();
        return $petDataListJsonArr;
    }

    public function get_image()
    {
        $getPetForImgArr = PetImageId::where('status', 0)->select('pet_id')->take(5)->get();
        foreach($getPetForImgArr as $petInfo) {
        $pet_id = $petInfo->pet_id;
        $res = $this->po_client->request('post', '/apps/pet_tracker/queries/read__qpt__list_pets', ['qp_pet_id'=>$pet_id]);

        $petDataArr = $res->json['objects'];
        $petdata = $petDataArr[0];
        
        foreach($petdata['pet_image_file_ids'] as $pet_im_id) {

            $resimg = $this->po_client->request('post', '/apps/pet_tracker/queries/read__tbl__vw_files_with_in_band_contents', ["qp_file_id" => $pet_im_id]);
            
            $resimgjson = $resimg->json;

            $data = 'data:image/png;base64,'.$resimgjson['objects'][0]['flin_contents'].'';
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);

            $path = 'storage/puppieimgs/'.$pet_id.'';
            
            if (!file_exists($path)) {
            mkdir($path, 0777, true);
            }
            $originalImageName = $path.'/image-'.$pet_im_id.'-original.jpeg';
            file_put_contents($originalImageName, $data);

            $sizeArr = array();
            $sizeArr[] = [74,90];
            $sizeArr[] = [253,280];
            $sizeArr[] = [540,380];
            
            foreach($sizeArr as $imgSizeVal) {
                $fileName = $path.'/image-'.$pet_im_id.'-'.$imgSizeVal[0].'X'.$imgSizeVal[1].'.jpeg';
                $image_resize = Image::make($originalImageName);
                $image_resize->resize($imgSizeVal[0], $imgSizeVal[1]);
                $image_resize->save($fileName);
            }

            
        }
        $updateimgstatus = PetImageId::where('pet_id', $pet_id)->update(['status' => 1]);
        }

        return "success";
    }

    public function petDetails($pet_id)
    {
        $res = $this->po_client->request('post', '/apps/pet_tracker/queries/read__qpt__list_pets', ['qp_pet_id'=>$pet_id]);

        $petDataArr = $res->json['objects'];
        $petDataArr[0]['isPrice'] = $this->isPrice;
        $petdata = $petDataArr[0];
        return $petdata;
    }

    //pet locations
    
    public function petByLocation()
    {
        $search_param = [];
        $search_param['qp_pstatus_name'] = "Available";
        $search_param['qp_pet_currently_at_entity_id'] = "4,9558";
        $search_param['limit'] = 2;
        $res = $this->po_client->request('post', '/apps/pet_tracker/queries/read__qpt__list_pets', $search_param);

        $petDataArr = $res->json['objects'];
        
        return $petDataArr;
    }
}
