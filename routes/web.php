<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'indexcontroller@index');

Route::get('/gallery', 'indexcontroller@gallery');

Route::get('/video', 'indexcontroller@video');

Route::get('/story', 'indexcontroller@story');

Route::get('/contact', 'indexcontroller@contact');

// admin page
Route::get('/admin', function(){
    return view('admin.admin');
});

//story
Route::get('/admin/story-management', 'adminController@index');

Route::get('/admin/story-management/create', 'adminController@create');

Route::post('/admin/story-management', 'adminController@store');

Route::get('/admin/story-management/{story_id}', 'adminController@show');

Route::get('/admin/story-management/{story_id}/edit', 'adminController@edit');

Route::put('/admin/story-management/{story_id}', 'adminController@update');

Route::delete('/admin/story-management/{story_id}', 'adminController@destroy');
