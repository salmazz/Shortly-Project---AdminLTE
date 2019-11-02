<?php

namespace App\Middleware;

use App\Models\User;
use Phplite\Session\Session;
use Phplite\Cookie\Cookie;
class GuestUser {
    public function handle() {
        $auth = Session::get('users') ? : Cookie::get('users');
        if($auth){
            $user = User::where('id','=',$auth)->first();
            if($user){
                return redirect(url('admin-panel/dashboard'));
            }
        }
    }
}