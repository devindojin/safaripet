<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ScriptSetting;

class ScriptSettingController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = ScriptSetting::where('id',1)->get();

        if ($setting !=null) {
            
            $data['data'] = $setting;

        }else{

            $data['data'] = [];
        }

        return $data;
    }

}
