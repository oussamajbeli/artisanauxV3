<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductssController;
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

Route::get('/login', function () {
    return view('login');
});

Route::get('/contacts', function () {
    return view('contacts');
});
Route::get('/product', function () {
    return view('product');
});

Route::get('/', function () {
    
    return view('master');
});

Route::get('logout', function () {
    Session::forget('user');
    return redirect('/');
});

Route::get('/register', function () {
    return view('register');
});


Route::get('/categories', function () {
    return view('categories');
});

Route::get('/services', function () {
    return view('services');
});



Route::post('/login','App\Http\Controllers\UsersController@login');

Route::get('product','App\Http\Controllers\ProductsController@index');

Route::get('/categories','App\Http\Controllers\CategoriesController@categories');


Route::get('/detail/{id}','App\Http\Controllers\ProductsController@detail');

Route::get('search','App\Http\Controllers\ProductsController@search');

Route::post('add_to_cart','App\Http\Controllers\ProductsController@addToCart');

Route::get('/cartlist','App\Http\Controllers\ProductsController@cartList');

Route::get('remove/{id}','App\Http\Controllers\ProductsController@remove');

Route::get('order','App\Http\Controllers\ProductsController@orderNow');

Route::post('orderplace','App\Http\Controllers\ProductsController@orderPlace');

Route::get('/myorders','App\Http\Controllers\ProductsController@myOrders');

Route::post('register','App\Http\Controllers\UsersController@Register');


Route::get('/categorydetail/{name}','App\Http\Controllers\ProductsController@selection');

Route::post('/message','App\Http\Controllers\MessagesController@messaging');


Route::get('sitemap.xml','App\Http\Controllers\SitemapController@index');


Route::get('/dashbord','App\Http\Controllers\UsersController@dash');

Route::get('/profile','App\Http\Controllers\adminController@profile');

Route::get('/info','App\Http\Controllers\adminController@info');

Route::get('/notification','App\Http\Controllers\adminController@notification');
