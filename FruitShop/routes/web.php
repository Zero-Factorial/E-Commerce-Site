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
/** Home routes */
Route :: get('/','HomeController@index');


/** Account routes */
Route :: get('/signup','AccountController@signup');
Route :: post('/register','AccountController@register');
Route :: get('/login','AccountController@login');
Route :: post('/check_auth','AccountController@check_auth');
Route :: get('/logout','AccountController@logout');
Route :: get('/edit-profile','AccountController@edit_profile');
Route :: post('/update-account','AccountController@update_profile');

/** Announcement routes */
Route :: get('/add-announcement','AnnouncementController@add_announcement');
Route :: post('/save-announcement','AnnouncementController@save_announcement');
Route :: get('/admin/all-announcement','AnnouncementController@all_announcement');
Route :: get('/delete-announcement/{announce_id}','AnnouncementController@delete_announcement');

/** Categories routes */
Route :: get('/add-category','CategoryController@add_category');
Route :: post('/save-category','CategoryController@save_category');
Route :: get('/admin/all-category','CategoryController@all_category');
Route :: get('/edit-category/{category_id}','CategoryController@edit_category');
Route :: post('/update-category/{category_id}','CategoryController@update_category');
Route :: get('/delete-category/{category_id}','CategoryController@delete_category');

/** products routes */
Route :: get('/add-product','ProductController@add_product');
Route :: post('/save-product','ProductController@save_product');
Route :: get('/admin/all-products','ProductController@all_products');
Route :: get('/delete-product/{fruit_id}','ProductController@delete_product');
Route :: get('/edit-product/{fruit_id}','ProductController@edit_product');
Route :: post('/update-product/{fruit_id}','ProductController@update_product');
