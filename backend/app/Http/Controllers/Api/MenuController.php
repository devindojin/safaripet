<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Menu;

class MenuController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $myMenu = Menu::first();
        $dataArr =  array();
        if($myMenu !=null){

           $myDecodeData = json_decode($myMenu->menus, true);

            if (!empty($myDecodeData)) {
               
               foreach($myDecodeData as $key=>$v){

                    $newhref = "";
                    if($v['href'] == ""){

                        $checkPage = \App\Models\Page::where('id',$v['type'])->first();

                        if($checkPage !=null){

                            $newhref = $checkPage->slug;
                        }
                    }

                    if (isset($v['children'])) {
                        
                        $dataArr[] = $v;

                        foreach($v['children'] as $key2=>$v2){

                            $newChildhref = "";
                            if($v2['href'] == ""){

                                $checkChildPage = \App\Models\Page::where('id',$v2['type'])->first();

                                if($checkChildPage !=null){

                                    $v2['href'] = $checkChildPage->slug;
                                    $dataArr[$key]['children'][] = $v2;
                                }
                            }

                        }

                        if (isset($dataArr[$key]['children'])) {

                            $dataNewUnsetArray = [];

                            foreach($dataArr[$key]['children'] as $key3=>$v3){

                                if ($v3['href'] == '') {

                                    unset($dataArr[$key]['children'][$key3]);

                                }else{

                                    $dataNewUnsetArray[] = $v3;
                                }
                            }

                            $dataArr[$key]['children'] = $dataNewUnsetArray;
                        }

                    }else{

                        $exitsingArray = $v;
                        $exitsingArray['children'] = [];
                        $dataArr[] = $exitsingArray;
                    }

                    if ($newhref !="") {

                        $dataArr[$key]['href'] = $newhref;
                    }
                }
           }
        }
        
        $menuBuilder['data'] = $dataArr;
        return $menuBuilder;
    }
    
}
