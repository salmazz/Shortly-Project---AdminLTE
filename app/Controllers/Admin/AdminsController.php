<?php


namespace App\Controllers\Admin;

use App\Models\Admin;
use Phplite\Validation\Validate;
use Phplite\Http\Request;
use Phplite\Session\Session;
class AdminsController{
 /**
  * show list of admins 
  @return \phplite\View\View
  */
  public function index(){
      $admins = Admin::get();
      $title="Admins";
      return view('admin.admins.index',['admins'=> $admins,'title'=>$title]);
  }
  

  public function create(){
    $title="create new Admin";
      return view('admin.admins.create',['title'=>$title]);
  }
  public function store(){
    Validate::validate([
      'first_name' => 'required|min:2|max:30',
      'last_name' => 'required|min:2|max:30',
      'user_name' => 'required|min:2|max:30|unique:admins,user_name',
      'password' => 'required|min:6|max:50',
  ], false);
  Admin::insert([
      'first_name' => Request::post('first_name'),
      'last_name' => Request::post('last_name'),
      'user_name' => Request::post('user_name'),
      'password' => password_hash(Request::post('password'), PASSWORD_BCRYPT)
  ]);
  Session::set('message', "The admin is created successfully");
  return redirect(url('admin-panel/admins'));
  }

  /**
   * edit admin by id 
   */
  public function edit($id) {
    $admin = Admin::where('id', '=', $id)->first();
    if (! $admin) {
        Session::set('message', 'The admin is not found');
        return redirect(url('admin-panel/admins'));
    }
    $title = "Edit " . $admin->first_name;
    return view('admin.admins.edit', ['admin' => $admin, 'title' => $title]);
}
/**
 * Update existing admin
 *
 * @param string $id
 * @return \Phplite\Url\Url
 */
public function update($id) {
    $admin = Admin::where('id', '=', $id)->first();
    if (! $admin) {
        Session::set('message', 'The admin is not found');
        return redirect(url('admin-panel/admins'));
    }
    Validate::validate([
        'first_name' => 'required|min:2|max:30',
        'last_name' => 'required|min:2|max:30',
        'user_name' => 'required|min:2|max:30|unique:admins,user_name,'.$admin->user_name,
        'password' => 'min:6|max:50',
    ], false);
    $data = [
        'first_name' => Request::post('first_name'),
        'last_name' => Request::post('last_name'),
        'user_name' => Request::post('user_name')
    ];
    $data = (Request::post('password')) ? array_merge($data, ['password' => password_hash(Request::post('password'), PASSWORD_BCRYPT)]) : $data;
    Admin::where('id', '=', $id)->update($data);
    Session::set('message', "The admin is updated successfully");
    return redirect(url('admin-panel/admins'));
}
/**
 * Delete existing admin
 *
 * @param string $id
 * @return \Phplite\Url\Url
 */
public function delete($id) {
    $admin = Admin::where('id', '=', $id)->first();
    if (! $admin) {
        Session::set('message', 'The admin is not found');
        return redirect(url('admin-panel/admins'));
    }
    Admin::where('id', '=', $id)->delete();
    Session::set('message', 'The admin is deleted successfully');
    return redirect(url('admin-panel/admins'));
  }
}