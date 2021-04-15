<?php

use Illuminate\Http\Request;

Route::get('/email', 'CustomerController@sendQrcode');


Route::prefix('pos')->namespace('Pos')->group(function(){
    Route::get('/loyalty', 'SyncController@loyalty');

    Route::group(['middleware' => 'assign.guard:cnb'], function (){

        Route::group(['prefix' => 'login'], function () {
            Route::post('/', 'LoginController@login');
        });

        Route::group(['middleware' => 'jwt.auth'], function () {
            Route::get('/outlet', 'OutletController@index');

            Route::prefix('sync')->group(function (){
                Route::post('/master', 'SyncController@master');
                Route::post('/customer', 'SyncController@customer');
                Route::post('/product', 'SyncController@product');
                Route::post('/promo', 'SyncController@promo');
                Route::post('/loyalty', 'SyncController@loyalty');
                Route::post('/sales', 'SyncController@sales');
                Route::get('/setting', 'SyncController@setting');
            });

            Route::prefix('shift')->group(function (){
                Route::post('/open', 'ShiftController@open');
                Route::post('/close', 'ShiftController@close');
                Route::get('/history', 'ShiftController@history');
            });

            Route::prefix('customer')->group(function (){
                Route::post('/', 'CustomerController@save');
                Route::get('/sendqrcode', 'CustomerController@sendQrcode');
            });

            Route::prefix('sales')->group(function (){
                Route::post('/', 'SalesController@store');
                Route::post('/batch', 'SalesController@batch');
                Route::post('/savesent', 'SalesController@saveSent');
            });

            Route::prefix('validasi')->group(function (){
                Route::get('/', 'ValidasiController@show');
            });

            Route::prefix('absensi')->group(function (){
                Route::get('/karyawan', 'AbsensiController@karyawan');
                Route::post('/check', 'AbsensiController@check');
                Route::post('/absen', 'AbsensiController@absen');
                Route::get('/show', 'AbsensiController@show');
            });
        });
    });
});

Route::prefix('member')->namespace('Member')->group(function(){
    Route::group(['middleware' => 'assign.guard:member'], function (){
        Route::get('qrcode/{id}', 'QrCodeController@qrcode');
        Route::post('/login', 'LoginController@login');
        Route::post('/register', 'LoginController@register');
        Route::get('/verifikasi/{id}', 'LoginController@verifikasi');

        Route::group(['middleware' => 'jwt.auth'], function () {
            Route::get('/promo', 'HomeController@promo');
            Route::get('/promo/{id}', 'HomeController@promo_detail');
            Route::get('/outlet', 'HomeController@outlet');
            Route::get('/pembelian', 'PembelianController@show');
            Route::get('/pembelian/{id}', 'PembelianController@detail');
            Route::get('/point', 'ProfileController@riwayat_point');
            Route::get('/product', 'ProductController@show');
            Route::get('/product/{id}', 'ProductController@product');
            Route::get('/category', 'ProductController@category');
            Route::get('/profile', 'UserController@me');
            Route::post('/profile', 'UserController@update');
            Route::post('/profile/password', 'UserController@change_paswd');
        });
    });
});
