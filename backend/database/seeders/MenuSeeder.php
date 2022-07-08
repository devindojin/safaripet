<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $mymenu = Menu::first();

        if ($mymenu) {

            $mymenu->delete();
        }
        
        $menuData = '[
                              {
                                "text": "Home",
                                "href": "/",
                                "icon": "empty",
                                "target": "_self",
                                "title": "",
                                "type": "custom"
                              },
                              {
                                "text": "Shop",
                                "href": "",
                                "icon": "empty",
                                "target": "_self",
                                "title": "",
                                "type": "custom",
                                "children": [
                                  {
                                    "text": "Shop Online",
                                    "href": "https://shop.safaristanspetcenter.com/",
                                    "icon": "empty",
                                    "target": "_blank",
                                    "title": "",
                                    "type": "custom"
                                  },
                                  {
                                    "text": "Shop at Your Local Store",
                                    "href": "https://store.safaristanspetcenter.com",
                                    "icon": "empty",
                                    "target": "_self",
                                    "title": "",
                                    "type": "custom"
                                  }
                                ]
                              },
                              {
                                "text": "Available Puppies",
                                "href": "/puppies-for-sale",
                                "icon": "empty",
                                "target": "_self",
                                "title": "",
                                "type": "custom"
                              },
                              {
                                "text": "We Care",
                                "href": "",
                                "icon": "empty",
                                "target": "_self",
                                "title": "",
                                "type": "custom",
                                "children": [
                                  {
                                    "text": "Veterinarian",
                                    "href": "/our-veterinarian",
                                    "icon": "empty",
                                    "target": "_self",
                                    "title": "",
                                    "type": "custom"
                                  },
                                  {
                                    "text": "Breeders",
                                    "href": "/breeders",
                                    "icon": "empty",
                                    "target": "_self",
                                    "title": "",
                                    "type": "custom"
                                  },
                                  {
                                    "text": "Community Services",
                                    "href": "/community",
                                    "icon": "empty",
                                    "target": "_self",
                                    "title": "",
                                    "type": "custom"
                                  }
                                ]
                              },
                              {
                                "text": "Financing",
                                "href": "/financing",
                                "icon": "empty",
                                "target": "_self",
                                "title": "",
                                "type": "custom"
                              },
                              {
                                "text": "About",
                                "href": "/about",
                                "icon": "empty",
                                "target": "_self",
                                "title": "",
                                "type": "custom",
                                "children": [
                                  {
                                    "text": "About Us",
                                    "href": "/about",
                                    "icon": "empty",
                                    "target": "_self",
                                    "title": "",
                                    "type": "custom"
                                  },
                                  {
                                    "text": "Faq",
                                    "href": "/faq",
                                    "icon": "empty",
                                    "target": "_self",
                                    "title": "",
                                    "type": "custom"
                                  }
                                ]
                              },
                              {
                                "text": "Contact",
                                "href": "/contact",
                                "icon": "empty",
                                "target": "_self",
                                "title": "",
                                "type": "custom"
                              },
                              {
                                "text": "Endless Petcare",
                                "href": "http://endlesspetcare.com",
                                "icon": "empty",
                                "target": "_blank",
                                "title": "",
                                "type": "custom"
                              }
                            ]';

        $menu = new Menu;
        $menu->menus = $menuData;
        $menu->save();
    }
}
