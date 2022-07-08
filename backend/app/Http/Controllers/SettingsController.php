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

    public function updateInstagramFeedSetting(Request $request)
    {
        $setting = Setting::where('name',Setting::INSGRAM_FEED_SETTING_ID)->first();
        $setting->name = 'instagram_feed';
        $setting->token = $request->token;
        $setting->save();

        return back();
    }

    public function getInstagramFeedSetting(){

        $settingInsta = Setting::where('name',Setting::INSGRAM_FEED_SETTING_ID)->first();

        return view('admin.settings.instagram_feed',compact('settingInsta'));
    }

}
