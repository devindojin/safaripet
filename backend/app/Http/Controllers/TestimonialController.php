<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientTestimonial;
use App\Models\Setting;

use Image;
class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clienttestimonials = ClientTestimonial::latest()->get();
        $settings = Setting::where('name','show_testimonial')->first();

        return view('admin.testimonial.index', compact('clienttestimonials','settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'client_name' => 'required',
            'title'  =>  'required',
            'description' => 'required',
            'status' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $clienttestimonials = new ClientTestimonial();
        $clienttestimonials->client_name = $request->client_name;
        $clienttestimonials->title = $request->title;
        $clienttestimonials->description = $request->description;
        $clienttestimonials->status = $request->status;

        if($request->hasFile('image')){
            $fileNameExt = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($fileNameExt, PATHINFO_FILENAME);
            $fileExt = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'.'.$fileExt;
            $pathToStore = $request->image->storeAs('public/uploads/images', $request->image->getClientOriginalName());
            $clienttestimonials->image = $fileNameToStore;

            $filePath = 'storage/uploads/images/'.$fileNameToStore;
            $image_resize = Image::make($filePath);
            $image_resize->resize('160', '160');
            $image_resize->save($filePath);
            
        }

        $clienttestimonials->save();

        return redirect('manage-testimonials')
                        ->with('success','Record has been added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clienttestimonials = ClientTestimonial::find($id);
        return view('admin.testimonial.edit', compact('clienttestimonials', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'client_name' => 'required',
            'title'  =>  'required',
            'description' => 'required',
            'status' => 'required',
        ]);

        $clienttestimonials = ClientTestimonial::find($id);
        $clienttestimonials->client_name = $request->client_name;
        $clienttestimonials->title = $request->title;
        $clienttestimonials->description = $request->description;
        $clienttestimonials->status = $request->status;

        if($request->hasFile('image')){
            $fileNameExt = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($fileNameExt, PATHINFO_FILENAME);
            $fileExt = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'.'.$fileExt;
            $pathToStore = $request->image->storeAs('public/uploads/images', $request->image->getClientOriginalName());
            $clienttestimonials->image = $fileNameToStore;
            
        }

        $clienttestimonials->save();

        return redirect('manage-testimonials')
                        ->with('success','Record has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
