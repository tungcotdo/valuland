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

Route::get('/', function () {
    return redirect()->route('admin.dashboard.index');
});

Route::group(['prefix' => 'admin','middleware' => ['auth']], function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('index', ['as' => 'admin.dashboard.index', 'uses' => 'Admin\DashboardController@index']);
    });
    
    Route::prefix('media')->group(function () {
        Route::post('sale-load/{sale_id}', ['as' => 'admin.media.sale-load', 'uses' => 'Admin\MediaController@saleLoad']);
        Route::post('sale-upload/{sale_id}', ['as' => 'admin.media.sale-upload', 'uses' => 'Admin\MediaController@saleUpload']);
        Route::post('sale-delete/{sale_img_id}', ['as' => 'admin.media.sale-delete', 'uses' => 'Admin\MediaController@saleDelete']);
        
        Route::post('rent-load/{rent_id}', ['as' => 'admin.media.rent-load', 'uses' => 'Admin\MediaController@rentLoad']);
        Route::post('rent-upload/{rent_id}', ['as' => 'admin.media.rent-upload', 'uses' => 'Admin\MediaController@rentUpload']);
        Route::post('rent-delete/{rent_img_id}', ['as' => 'admin.media.rent-delete', 'uses' => 'Admin\MediaController@rentDelete']);

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
        Route::get('raw', ['as' => 'admin.sale.raw', 'uses' => 'Admin\SaleController@raw']);
        Route::get('select', ['as' => 'admin.sale.select', 'uses' => 'Admin\SaleController@select']);
        Route::get('transaction', ['as' => 'admin.sale.transaction', 'uses' => 'Admin\SaleController@transaction']);
        Route::get('transaction-edit/{sale_id}', ['as' => 'admin.sale.transaction-edit', 'uses' => 'Admin\SaleController@transactionEdit']);
        Route::post('transaction-update/{sale_id}', ['as' => 'admin.sale.transaction-update', 'uses' => 'Admin\SaleController@transactionUpdate']);
        Route::get('transaction', ['as' => 'admin.sale.transaction', 'uses' => 'Admin\SaleController@transaction']);
        Route::get('add', ['as' => 'admin.sale.add', 'uses' => 'Admin\SaleController@add']);
        Route::post('store', ['as' => 'admin.sale.store', 'uses' => 'Admin\SaleController@store']);
        Route::get('edit/{sale_id}', ['as' => 'admin.sale.edit', 'uses' => 'Admin\SaleController@edit']);
        Route::post('update/{sale_id}', ['as' => 'admin.sale.update', 'uses' => 'Admin\SaleController@update']);
        Route::get('delete/{sale_id}', ['as' => 'admin.sale.delete', 'uses' => 'Admin\SaleController@delete']);
        Route::get('status/{sale_id}/{sale_status}', ['as' => 'admin.sale.status', 'uses' => 'Admin\SaleController@status']);
    });

    Route::prefix('rent')->group(function () {
        Route::get('raw', ['as' => 'admin.rent.raw', 'uses' => 'Admin\RentController@raw']);
        Route::get('select', ['as' => 'admin.rent.select', 'uses' => 'Admin\RentController@select']);
        Route::get('transaction', ['as' => 'admin.rent.transaction', 'uses' => 'Admin\RentController@transaction']);
        Route::get('transaction-edit/{rent_id}', ['as' => 'admin.rent.transaction-edit', 'uses' => 'Admin\RentController@transactionEdit']);
        Route::post('transaction-update/{rent_id}', ['as' => 'admin.rent.transaction-update', 'uses' => 'Admin\RentController@transactionUpdate']);
        Route::get('transaction', ['as' => 'admin.rent.transaction', 'uses' => 'Admin\RentController@transaction']);
        Route::get('add', ['as' => 'admin.rent.add', 'uses' => 'Admin\RentController@add']);
        Route::post('store', ['as' => 'admin.rent.store', 'uses' => 'Admin\RentController@store']);
        Route::get('edit/{rent_id}', ['as' => 'admin.rent.edit', 'uses' => 'Admin\RentController@edit']);
        Route::post('update/{rent_id}', ['as' => 'admin.rent.update', 'uses' => 'Admin\RentController@update']);
        Route::get('delete/{rent_id}', ['as' => 'admin.rent.delete', 'uses' => 'Admin\RentController@delete']);
        Route::get('status/{rent_id}/{rent_status}', ['as' => 'admin.rent.status', 'uses' => 'Admin\RentController@status']);
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
        Route::get('send', ['as' => 'admin.notification.send', 'uses' => 'Admin\NotificationController@send']);
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

