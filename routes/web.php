<?php

use Phplite\Router\Route;

// Route::get('/', 'HomeController@index');

 Route::get('/','Web\HomeController@index');
// save link 

Route::post('links/store','Web\LinksController@store');


Route::get('/link/{link}', 'Web\LinksController@link');
// guest user

 Route::middleware('GuestUser',function(){
     // login routes 
     Route::get('/login','Web\AuthController@showLoginForm');
     Route::post('/login','Web\AuthController@login');
     // register routes
     Route::get('/register','Web\AuthController@showRegisterForm');
     Route::post('/register','Web\AuthController@register');

 });

 Route::middleware('AuthUser',function(){
    // My links
    Route::get('/my-links', 'Web\LinksController@myLinks');
    // Delete link
    Route::post('link/{id}/delete', 'Web\LinksController@delete');
    // Logout user
    Route::post('logout', 'Web\AuthController@logout');
 });

