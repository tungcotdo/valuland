<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

// Login to admin
Auth::routes(['register' => false]);
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['prefix' => 'admin','middleware' => ['auth']], function () {
    Route::prefix('dashboad')->group(function () {
        Route::get('index', ['as' => 'admin.dashboad.index', 'uses' => 'Admin\DashboardController@index']);
    });
});

