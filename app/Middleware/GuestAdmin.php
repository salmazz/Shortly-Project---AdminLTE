<?php

namespace App\Middleware;

use App\Models\Admin;
use Phplite\Session\Session;
use Phplite\Cookie\Cookie;
class GuestAdmin {
    public function handle() {
        $auth = Session::get('admins') ? : Cookie::get('admins');
        if($auth){
            $admin = Admin::where('id','=',$auth)->first();
            if($admin){
                return redirect(url('admin-panel/dashboard'));
            }
        }
    }
}