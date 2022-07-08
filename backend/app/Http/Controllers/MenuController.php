<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Page;
use Auth;

class MenuController extends Controller
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

    /**
     * This function is used to get menu for for add and update menu list
     * @author Chirag Ghevariya
     */
    public function index(){
        
        $pages = Page::get();
        $data["pages"] = $pages;

        // get previous menus
        $menu = Menu::first();
        $data['prevMenu'] = '';
        if (!empty($menu)) {
            $data['prevMenu'] = $menu->menus;
        }

        return view('admin.menu.index', $data);
    }

    /**
     * This function is used to add/update menu
     * @author Chirag Ghevariya
     */
    public function store(Request $request){

        $mymenu = Menu::first();

        if ($mymenu) {

            $mymenu->delete();
        }
        
        $menu = new Menu;
        $menu->menus = $request->str;
        $menu->save();

        \Session::flash('success', 'Menu updated successfully!');
        return "success";
    }
}
