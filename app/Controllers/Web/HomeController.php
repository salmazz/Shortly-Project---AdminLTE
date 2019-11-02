<?php 

namespace App\Controllers\Web;

class HomeController{
    public function index(){
    $title="home page";
    return view('web.home.index',['title' => $title]);

    }
}