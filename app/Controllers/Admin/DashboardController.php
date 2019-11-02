<?php

namespace App\Controllers\Admin;
use Phplite\Url\Url;
use App\Models\Admin;

class DashboardController{

    public function index(){
        $title="Dashboard";
        return view('admin.dashboard.index',['title'=> $title]);
    }
}









?>