<?php 

use Phplite\Router\Route;

Route::prefix('admin-panel',function(){
 // guest admin panel
 Route::middleware('GuestAdmin',function(){
Route::get('/','Admin\AuthController@index');
Route::post('/','Admin\AuthController@submit');
 });
 // Auth  admin routes 
 Route::middleware('AuthAdmin',function(){
   // Dashboard 
   Route::get('/dashboard','Admin\DashboardController@index');
   // logout
  Route::post('/admins/{id}/delete','Admin\AdminsController@delete');

    // Admin Resources

  Route::get('/admins','Admin\AdminsController@index');
  Route::get('/admins/create','Admin\AdminsController@create');
  Route::post('/admins/store','Admin\AdminsController@store');
  Route::get('/admins/{id}/edit','Admin\AdminsController@edit');
  Route::post('/admins/{id}/update','Admin\AdminsController@update');
    // user Resources

    Route::get('/users','Admin\UsersController@index');
    Route::get('/users/create','Admin\UsersController@create');
    Route::post('/users/store','Admin\UsersController@store');
    Route::get('/users/{id}/edit','Admin\UsersController@edit');
    Route::post('/users/{id}/update','Admin\UsersController@update');
    Route::post('/users/{id}/delete','Admin\UsersController@delete');
  

    // link resouce 

    Route::get('/links','Admin\LinksController@index');
    Route::get('/links/{id}/delete','Admin\LinksController@delete');
    Route::post('/logout','Admin\AuthController@logout');

});


});