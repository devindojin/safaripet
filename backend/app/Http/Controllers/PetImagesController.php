<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Filesystem\Filesystem;

use App\Models\PetImageId;

class PetImagesController extends Controller
{
    public function index(Request $request)
    {
        $petImages = PetImageId::where('order_status','Available')->paginate(20);

        $totalImages = PetImageId::where('order_status','Available')->count();
        
        $completeImages = PetImageId::where('order_status','Available')->where('status', 1)->count();
        $pendingImages = PetImageId::where('order_status','Available')->where('status', 0)->count();
 
        return view('admin.petimage.index', compact('petImages','totalImages', 'completeImages', 'pendingImages'))->with('no', 1);
    }

    public function truncateImages()
    {
        PetImageId::query()->update(['status'=>0]);

        $dir_path = storage_path('app/public/puppieimgs');

        $file = new Filesystem;
        $file->cleanDirectory($dir_path);

        return redirect()->route('pet-images');
    }

    public function refresh(Request $request,$id)
    {
        $folderPath = 'storage/puppieimgs/';

        $allDirectory  = scandir($folderPath);
        $id=\Crypt::decrypt($id);
        if($id != NULL){
                    
                    $fullPath = $folderPath.'4502'.'/';

                    if(file_exists($fullPath)) {
                        \File::deleteDirectory($fullPath);
                        \Session::put('success','Image successfully removed');
                        return redirect()->back();
                    }else{
                        \Session::put('error','There is No image');
                        return redirect()->back();
                    }         
        }
         \Session::get('error','Something went wrong');
         return redirect()->back();
    }
}
