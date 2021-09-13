<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Traits\CurlRequestTrait;

use DB;
use App\Models\Zoho;

class ZohoController extends Controller
{
    
    use CurlRequestTrait;

    public function insertPetProfile(Request $request) {
        $zohoUrl = "https://www.zohoapis.com/crm/v2/Puppy_Inquiry";
        $zoho = Zoho::find(1);
              
        $header = [];
        $header[] = "Authorization: Zoho-oauthtoken $zoho->access_token";
        
        $param = [];
        $param['data'][0]['Name'] = $request->first_name;
        $param['data'][0]['Last_Name'] = $request->last_name;
        $param['data'][0]['Phone'] = $request->phone;
        $param['data'][0]['Email'] = $request->email;
        $param['data'][0]['message'] = $request->message;
        $param['data'][0]['My_Enquiry_Stage'] = "General";

        // pet data
        $param['data'][0]['Breed'] = $request->breed;
        $param['data'][0]['DOB'] = $request->birth_date;
        $param['data'][0]['Color'] = $request->color;
        $param['data'][0]['RefID'] =  $request->pet_id;
        $param['data'][0]['Gender'] = $request->gender;;
        $param['data'][0]['Location'] = $request->location;
        $json_param = json_encode($param);
        $response = $this->request($zohoUrl,"POSTPARAM",$header,$json_param);
        $resArr = json_decode($response,true);
        
        return $resArr;
    }
}
