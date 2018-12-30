<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function index(){
       return view("pages/index");
   }
   public function about(){
    return view("pages/about");
}
public function vuetest(){
    return view("pages/vuetest");
}
public function services(){
    $data = array(
        'title'=>'service',
        'services'=>['hii','bayy','ulaay']
    );
    return view("pages/services")->with($data);
}
}
