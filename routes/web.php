<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\ProductsController;
//use ProductsController;
// added to solve 
//use App\Customers;
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

Route::get('/', function () {

    return view('dashboard');
});
//Route::Auth ;
//Route::get('/login','CopyLoginController@index');
//Route::get('/register','CopyRegisterController@index');
Route::resource('products', 'ProductsController');
//Auth::routes();

//Route::get('/dashboard', 'DashboardController@index');
//Route::get('/login', 'LoginController@index');