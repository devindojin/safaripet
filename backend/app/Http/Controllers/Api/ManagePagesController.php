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
        
        return $page_status;
    }
}
