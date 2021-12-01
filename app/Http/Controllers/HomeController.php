<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function sample()
    {
        $name = ['ak','br','as'];
        // $chanel = "online web tutorial";
        // return view("home",array('name1'=>$name,'chanel1'=>$chanel));

        return view("home")->withName($name);
    }
}
