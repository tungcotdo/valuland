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
    
    Route::prefix('owner')->group(function () {
        Route::get('index', ['as' => 'admin.owner.index', 'uses' => 'Admin\OwnerController@index']);
        Route::get('add', ['as' => 'admin.owner.add', 'uses' => 'Admin\OwnerController@add']);
        Route::post('store', ['as' => 'admin.owner.store', 'uses' => 'Admin\OwnerController@store']);
        Route::get('form-upload-excel', ['as' => 'admin.owner.form-upload-excel', 'uses' => 'Admin\OwnerController@formUploadExcel']);
        Route::post('upload-excel', ['as' => 'admin.owner.upload-excel', 'uses' => 'Admin\OwnerController@uploadExcel']);
        Route::get('edit/{owner_id}', ['as' => 'admin.owner.edit', 'uses' => 'Admin\OwnerController@edit']);
        Route::post('update/{owner_id}', ['as' => 'admin.owner.update', 'uses' => 'Admin\OwnerController@update']);
        Route::get('update-demand/{owner_id}/{owner_demand}', ['as' => 'admin.owner.update-demand', 'uses' => 'Admin\OwnerController@updateDemand']);
        Route::get('delete/{owner_id}', ['as' => 'admin.owner.delete', 'uses' => 'Admin\OwnerController@delete']);
        Route::get('truncate', ['as' => 'admin.owner.truncate', 'uses' => 'Admin\OwnerController@truncate']);
    });

    Route::prefix('sale')->group(function () {
        Route::get('index', ['as' => 'admin.sale.index', 'uses' => 'Admin\SaleController@index']);
        Route::get('add', ['as' => 'admin.sale.add', 'uses' => 'Admin\SaleController@add']);
        Route::post('store', ['as' => 'admin.sale.store', 'uses' => 'Admin\SaleController@store']);
        Route::get('edit/{sale_id}', ['as' => 'admin.sale.edit', 'uses' => 'Admin\SaleController@edit']);
        Route::get('update/{sale_id}', ['as' => 'admin.sale.update', 'uses' => 'Admin\SaleController@update']);
        Route::get('delete/{sale_id}', ['as' => 'admin.sale.delete', 'uses' => 'Admin\SaleController@delete']);
    });

    Route::prefix('rent')->group(function () {
        Route::get('index', ['as' => 'admin.rent.index', 'uses' => 'Admin\RentController@index']);
        Route::get('add', ['as' => 'admin.rent.add', 'uses' => 'Admin\RentController@add']);
        Route::post('store', ['as' => 'admin.rent.store', 'uses' => 'Admin\RentController@store']);
        Route::get('edit/{rent_id}', ['as' => 'admin.rent.edit', 'uses' => 'Admin\RentController@edit']);
        Route::post('update/{rent_id}', ['as' => 'admin.rent.update', 'uses' => 'Admin\RentController@update']);
        Route::get('delete/{rent_id}', ['as' => 'admin.rent.delete', 'uses' => 'Admin\RentController@delete']);
    });

    Route::prefix('contract')->group(function () {
        Route::get('index', ['as' => 'admin.contract.index', 'uses' => 'Admin\ContractController@index']);
        Route::get('add', ['as' => 'admin.contract.add', 'uses' => 'Admin\ContractController@add']);
        Route::post('store', ['as' => 'admin.contract.store', 'uses' => 'Admin\ContractController@store']);
        Route::get('edit/{contract_id}', ['as' => 'admin.contract.edit', 'uses' => 'Admin\ContractController@edit']);
        Route::post('update/{contract_id}', ['as' => 'admin.contract.update', 'uses' => 'Admin\ContractController@update']);
        Route::get('delete/{contract_id}', ['as' => 'admin.contract.delete', 'uses' => 'Admin\ContractController@delete']);
    });
    
    Route::prefix('notification')->group(function () {
        Route::get('index', ['as' => 'admin.notification.index', 'uses' => 'Admin\NotificationController@index']);
        Route::get('add', ['as' => 'admin.notification.add', 'uses' => 'Admin\NotificationController@add']);
        Route::post('store', ['as' => 'admin.notification.store', 'uses' => 'Admin\NotificationController@store']);
        Route::get('edit/{notification_id}', ['as' => 'admin.notification.edit', 'uses' => 'Admin\NotificationController@edit']);
        Route::post('update/{notification_id}', ['as' => 'admin.notification.update', 'uses' => 'Admin\NotificationController@update']);
        Route::get('delete/{notification_id}', ['as' => 'admin.notification.delete', 'uses' => 'Admin\NotificationController@delete']);
    });

    Route::prefix('user')->group(function () {
        Route::get('index', ['as' => 'admin.user.index', 'uses' => 'Admin\UserController@index']);
        Route::get('add', ['as' => 'admin.user.add', 'uses' => 'Admin\UserController@add']);
        Route::post('store', ['as' => 'admin.user.store', 'uses' => 'Admin\UserController@store']);
        Route::get('edit/{user_id}', ['as' => 'admin.user.edit', 'uses' => 'Admin\UserController@edit']);
        Route::post('update/{user_id}', ['as' => 'admin.user.update', 'uses' => 'Admin\UserController@update']);
        Route::get('delete/{user_id}', ['as' => 'admin.user.delete', 'uses' => 'Admin\UserController@delete']);
    });
});

