<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::where('name',Setting::INSGRAM_FEED_SETTING_ID)->get();

        if ($setting !=null) {
            
            $data['data'] = $setting;

        }else{

            $data['data'] = [];
        }

        return $data;
    }

}
