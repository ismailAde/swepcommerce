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

// PagesController
Route::get('/', ['as'=>'home_path', 'uses'=>'PagesController@index']);
Route::get('/faq', ['as'=>'faq_path', 'uses'=>'PagesController@faq']);
Route::get('/login/', ['as'=>'login_path', 'uses'=>'PagesController@login']);
Route::get('/signup', ['as'=>'signup_path', 'uses'=>'PagesController@signup']);

//UsersController
Route::get('/user/{id}', ['as'=>'profile_path', 'uses'=>'UsersController@profile']);
Route::get('/user/{userId}', ['as'=>'profile_path', 'uses'=>'UsersController@profile']);
Route::post('/user/login', ['as'=>'action_login_path', 'uses'=>'UsersController@loginUser']);
Route::post('/user/signup', ['as'=>'action_signup_path', 'uses'=>'UsersController@signup']);
Route::get('/logout/user', ['as'=>'action_logout_path', 'uses'=>'UsersController@logoutUser']);

//Route::post('/search/action', ['as'=>'search_path_one', 'uses'=>'UsersController@search']);

//ProductsController
Route::get('/product/{id}', ['as'=>'product_path', 'uses'=>'ProductsController@showProduct']);
Route::get('/products', ['as'=>'products_path', 'uses' => 'ProductsController@listProducts']);
Route::get('/add/product/{sellerId}', ['as'=>'add_product_path', 'uses'=>'ProductsController@addProduct']);
Route::post('/create/product', ['as'=>'create_product_path', 'uses'=>'ProductsController@createProduct']);
Route::get('/edit/product/{id}', ['as'=>'edit_product_path', 'uses'=>'ProductsController@editProduct']);
Route::post('/update/product', ['as'=>'update_product_path', 'uses'=>'ProductsController@updateProduct']);
Route::get('/delete/product/{productId}/{userId}', ['as'=>'delete_product_path', 'uses'=>'ProductsController@deleteProduct']);
Route::post('/search', ['as'=>'product_search_path', 'uses'=>'ProductsController@searchProductsByTags']);
Route::get('/search/{tags}', ['as'=>'product_search_get_path', 'uses'=>'ProductsController@searchProductsByTags']);
