<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use Auth;

class ManagePagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $pages = Page::latest()->get();
        
        return view('admin.managePages.index', compact('pages'));
    }

    public function create(){
        return view('admin.managePages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'page_title' => 'required',
            'banner_text'  =>  'required',
            'description' => 'required',
            'slug' => 'required',
            'status' => 'required',
        ]);

        $pages = new Page;
        $pages->page_title = $request->page_title;
        $pages->banner_text = $request->banner_text;
        $pages->description = $request->description;
        $pages->slug = $request->slug;
        $pages->status = $request->status;
        $pages->meta_title = $request->meta_title;
        $pages->meta_tag = $request->meta_tag;
        $pages->meta_description = $request->meta_description;    

        if($request->hasFile('banner')){
            $fileNameExt = $request->file('banner')->getClientOriginalName();
            $fileName = pathinfo($fileNameExt, PATHINFO_FILENAME);
            $fileExt = $request->file('banner')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'.'.$fileExt;
            $pathToStore = $request->banner->storeAs('public/uploads/images', $request->banner->getClientOriginalName());
            $pages->banner = $fileNameToStore;
            $pages->save();
        }

        $pages->save();

        return redirect('admin/manage-pages')
                        ->with('success','page created successfully.');
    }

    public function edit($id)
    {
        $pages = Page::find($id);
        return view('admin.managePages.edit', compact('pages','id'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'page_title' => 'required',
            'banner_text'  =>  'required',
            'description' => 'required',
            'slug' => 'required',
            'status' => 'required',
        ]);

        $pages = Page::find($id);
        $pages->page_title = $request->page_title;
        $pages->banner_text = $request->banner_text;
        $pages->description = $request->description;
        $pages->slug = $request->slug;
        $pages->status = $request->status;
        $pages->meta_title = $request->meta_title;
        $pages->meta_tag = $request->meta_tag;
        $pages->meta_description = $request->meta_description;    

        if($request->hasFile('banner')){
            $fileNameExt = $request->file('banner')->getClientOriginalName();
            $fileName = pathinfo($fileNameExt, PATHINFO_FILENAME);
            $fileExt = $request->file('banner')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'.'.$fileExt;
            $pathToStore = $request->banner->storeAs('public/uploads/images', $request->banner->getClientOriginalName());
            $pages->banner = $fileNameToStore;

        }

        $pages->save();

        return redirect('admin/manage-pages')
                        ->with('success','page updated successfully.');
    }

    public function destroy($id)
    {
        
    }

    public function changeStatus(Request $request)
    {
        $id = $request->id;
        if($request->status == 1) {
            $status = 0;
        } else {
            $status = 1;
        }

        $pages = Page::find($id);
        $pages->status = $status;
        $pages->save();
    }
}
