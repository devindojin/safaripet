<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingsController extends Controller
{
    public function update(Request $request)
    {
        $id = Setting::where('name',$request->name)->first()->id;
        if($request->value === "true") {
            $status = true;
        } else {
            $status = false;
        }
        
        $setting = Setting::find($id);
        $setting->status = $status;
        $setting->save();
    }
}
