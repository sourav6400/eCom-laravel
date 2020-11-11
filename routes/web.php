<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

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

// Route::get('/', function () {
//     // return view('welcome');
//     return 'Welcome to a Laravel Project.';
// });

// Route::get('/', 'WelcomeController@home');
// Route::get('/', [WelcomeController::class, 'home']);

Route::view('/', 'login');

Route::get('/about/{name}/{id}', function ($name) {
    // return view('welcome');
    return 'This name is '.$name.' and my ID is ';
});
