<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Page;

class ManagePagesController extends Controller
{
    public function getPage($slug)
    {
        $page = Page::first()->where('slug',$slug)->get();

        return $page;
    }

    public function aboutPage()
    {
        return $this->getPage('about');
    }

    public function venterinarinPage()
    {
        return $this->getPage('venterinarin');
    }

    public function breedersPage()
    {
        return $this->getPage('breeders');
    }

    public function communityPage()
    {
        return $this->getPage('commmunityservices');
    }

    public function financingPage()
    {
        return $this->getPage('financing');
    }

    public function pageStatus()
    {
        $page_status = Page::select(['slug','status'])->get();

        $page_status_arr = [];
        $i = 0;
        foreach($page_status as $singlePage) {
            $page_status_arr[$i]['slug'] = $singlePage->slug;
            $page_status_arr[$i]['status'] = $singlePage->status;

            $i++;
        }
        
        $page_status_arr[5]['slug'] = "wecare";
        $page_status_arr[5]['status'] = 1;

        return $page_status_arr;
    }
}
