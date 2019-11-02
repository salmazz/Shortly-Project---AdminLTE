<?php

namespace App\Controllers\Admin;

use App\Models\Admin;
use Phplite\Cookie\Cookie;
use Phplite\Http\Request;
use Phplite\Session\Session;
use Phplite\Validation\Validate;
use Phplite\Url\Url;
class AuthController
{
    /**
     * Admin Login Page 
     */
    public function index()
    {
        $title = "Admin Login";
        return view('admin.auth.login', ['title' =>  $title]);
    }
    public function submit()
    {
        Validate::validate([
            'user_name' => 'required|min:4|max:191',
            'password' => 'required|min:6|max:191',
            'remember' => 'in:on',
        ], false);

        $admin = Admin::where('user_name','=',Request::post('user_name'))->first();
        if(! $admin){
            Session::set('message','The User is Not Found');
            Session::set('old',Request::all());
            return Url::redirect(Url::previous());
        }

        if (! password_verify(Request::post('password'), $admin->password)) {
            Session::set('message', 'The user is not found');
            Session::set('old', Request::all());
            return redirect(previous());
        }
        Request::post('remember') == 'on' ? Cookie::set('admins', $admin->id) : Session::set('admins', $admin->id);
        return redirect(url('admin-panel/dashboard'));
    }
    /**
     * logout admin
     * @return /phplite/url/url
     */
    public function logout(){
          Cookie::remove('admins');
          Session::remove('admins');
          return redirect(url('admin-panel'));
    }
}
