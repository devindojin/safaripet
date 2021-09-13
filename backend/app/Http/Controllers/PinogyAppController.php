<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PinogyApi;

class PinogyAppController extends Controller
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pinogypage = PinogyApi::find($id);
        
        return view('admin.pinogy.edit', compact('pinogypage','id'));
    }

    public function update(Request $request, $id) 
    {
        $pinogy = PinogyApi::find($id);
        $pinogy->endurl = $request->endurl;
        $pinogy->accskey = $request->accskey;
        $pinogy->srckey = $request->srckey;
        $pinogy->pwdkey = $request->pwdkey;
        $pinogy->apikey = $request->apikey;
        $pinogy->price = $request->price;

        $pinogy->save();

        return redirect('admin/pinogy-settings/1/edit')
                        ->with('success','Pinogy settings has been updated successfully.');
    }
}
