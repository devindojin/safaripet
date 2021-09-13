<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Filesystem\Filesystem;

use App\Models\PetImageId;

class PetImagesController extends Controller
{
    public function index(Request $request)
    {
        $petImages = PetImageId::paginate(20);

        $totalImages = PetImageId::count();
        
        $completeImages = PetImageId::where('status', 1)->count();
        $pendingImages = PetImageId::where('status', 0)->count();
 
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
}
