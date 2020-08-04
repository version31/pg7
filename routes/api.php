<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| V2
|--------------------------------------------------------------------------
|
*/
Route::group([
    'namespace'  => 'Api',
    'prefix'     => 'v2',
], function ($router) {
    require base_path('routes/api.v2.php');
});



