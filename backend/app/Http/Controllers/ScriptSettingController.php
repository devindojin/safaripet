<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ScriptSetting;

class ScriptSettingController extends Controller
{
    public function update(Request $request)
    {
        $ss=ScriptSetting::firstOrFail();
        $ss->header_display=$request->header_display;
        $ss->footer_display=$request->footer_display;
        $ss->body_display=$request->body_display;
        $ss->body_display_status=$request->body_display_status;
        $ss->footer_display_status=$request->footer_display_status;
        $ss->header_display_status=$request->header_display_status;
        $ss->save();

        return back();
        
    }

    public function edit()
    {

        
        $ss=ScriptSetting::firstOrFail();
        return view('admin.settings.script_setting',compact('ss'));
    }

}
