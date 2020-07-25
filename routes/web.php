<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Dev tools
|--------------------------------------------------------------------------
|
*/
Route::group([
    'namespace'  => 'Dev',
    'prefix'     => 'dev',
], function ($router) {
    require base_path('routes/dev.php');
});


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
    return view('welcome');
});
