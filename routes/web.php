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

Route::post('/import/items','ImportController@items')->name('import.items');
Route::post('/import/ingredient','ImportController@ingredient')->name('import.ingredient');
Route::post('/import/recipe','ImportController@recipe')->name('import.recipe');
Route::post('/import/cust','ImportController@cust')->name('import.cust');
Route::post('/import/supplier','ImportController@supplier')->name('import.supplier');
Route::post('/import/users','ImportController@users')->name('import.users');

Route::get('/foto','ImageController@show')->name('images');

Route::prefix('/login')->group(function (){
    Route::get('/','LoginController@showLoginForm')->name('login');
    Route::post('/','LoginController@login');
    Route::post('/logout','LoginController@logout')->name('logout');
});

Route::prefix('/reset')->group(function (){
    Route::get('/','ResetPasswordController@showResetForm')->name('resetpassword');
    Route::post('/','ResetPasswordController@reset');
});

Route::prefix('/register')->group(function (){
    Route::get('/','RegisterController@showRegisterForm')->name('register');
    Route::post('/','RegisterController@register');
});

Route::get('/','HomeController@index')->name('home');
Route::get('/email','HomeController@email')->name('email');
Route::get('/struk','HomeController@struk')->name('struk');
Route::get('/qrcode','HomeController@qrcode')->name('qrcode');
Route::get('/img_qrcode/{id}','HomeController@img_qrcode')->name('img_qrcode');

Route::prefix('/data')->group(function (){
    Route::prefix('/customer')->group(function (){
        Route::get('/','CustomerController@index')->name('customer');
        Route::get('/show','CustomerController@show')->name('customer.show');
        Route::get('/form','CustomerController@form')->name('customer.form');
        Route::get('/form/{id}','CustomerController@form')->name('customer.edit');
        Route::post('/','CustomerController@save')->name('customer.save');
        Route::post('/{id}','CustomerController@update')->name('customer.update');
        Route::get('/delete/{id}','CustomerController@delete')->name('customer.delete');
    });
});

Route::prefix('/user-man')->group(function (){

    Route::prefix('/user')->group(function (){
        Route::get('/','UserController@index')->name('user');
        Route::get('/show','UserController@show')->name('user.show');
        Route::get('/form','UserController@form')->name('user.form');
        Route::get('/form/{id}','UserController@form')->name('user.edit');
        Route::post('/','UserController@save')->name('user.save');
        Route::post('/{id}','UserController@update')->name('user.update');
        Route::get('/delete/{id}','UserController@delete')->name('user.delete');
    });

    Route::prefix('/karyawan')->group(function (){
        Route::get('/','KaryawanController@index')->name('karyawan');
        Route::get('/show','KaryawanController@show')->name('karyawan.show');
        Route::get('/form','KaryawanController@form')->name('karyawan.form');
        Route::get('/form/{id}','KaryawanController@form')->name('karyawan.edit');
        Route::post('/','KaryawanController@save')->name('karyawan.save');
        Route::post('/{id}','KaryawanController@update')->name('karyawan.update');
        Route::get('/delete/{id}','KaryawanController@delete')->name('karyawan.delete');
    });

    Route::prefix('/outlet')->group(function (){
        Route::get('/','OutletController@index')->name('outlet');
        Route::get('/show','OutletController@show')->name('outlet.show');
        Route::get('/form','OutletController@form')->name('outlet.form');
        Route::get('/form/{id}','OutletController@form')->name('outlet.edit');
        Route::post('/','OutletController@save')->name('outlet.save');
        Route::post('/{id}','OutletController@update')->name('outlet.update');
        Route::get('/delete/{id}','OutletController@delete')->name('outlet.delete');
    });

    Route::prefix('/absensi')->group(function (){
        Route::get('/','AbsensiController@index')->name('absensi');
        Route::get('/show','AbsensiController@show')->name('absensi.show');
    });

    Route::prefix('/akses')->group(function (){
        Route::get('/','AksesController@index')->name('akses');
        Route::get('/show','AksesController@show')->name('akses.show');
        Route::get('/form','AksesController@form')->name('akses.form');
        Route::get('/form/{id}','AksesController@form')->name('akses.edit');
        Route::get('/details/{id}','AksesController@details')->name('akses.details');
        Route::post('/','AksesController@save')->name('akses.save');
        Route::post('/{id}','AksesController@update')->name('akses.update');
        Route::get('/delete/{id}','AksesController@delete')->name('akses.delete');
    });
});

Route::prefix('/ingredient')->group(function (){
    Route::prefix('/library')->group(function (){
        Route::get('/','LibraryController@index')->name('library');
        Route::get('/show','LibraryController@show')->name('library.show');
        Route::get('/export','LibraryController@export')->name('library.export');
        Route::get('/form','LibraryController@form')->name('library.form');
        Route::get('/form/{id}','LibraryController@form')->name('library.edit');
        Route::post('/','LibraryController@save')->name('library.save');
        Route::post('/{id}','LibraryController@update')->name('library.update');
        Route::get('/delete/{id}','LibraryController@delete')->name('library.delete');
    });

    Route::prefix('/category')->group(function (){
        Route::get('/','Category_IngredientController@index')->name('category');
        Route::get('/show','Category_IngredientController@show')->name('category.show');
        Route::get('/form','Category_IngredientController@form')->name('category.form');
        Route::get('/form/{id}','Category_IngredientController@form')->name('category.edit');
        Route::post('/','Category_IngredientController@save')->name('category.save');
        Route::post('/{id}','Category_IngredientController@update')->name('category.update');
        Route::get('/delete/{id}','Category_IngredientController@delete')->name('category.delete');
    });

    Route::prefix('/recipe')->group(function (){
        Route::get('/','RecipeController@index')->name('recipe');
        Route::get('/show','RecipeController@show')->name('recipe.show');
        Route::get('/export','RecipeController@export')->name('recipe.export');
        Route::get('/product','RecipeController@product')->name('recipe.product');
        Route::get('/recipe','RecipeController@recipe')->name('recipe.recipe');
        Route::get('/form','RecipeController@form')->name('recipe.form');
        Route::get('/form/{id}','RecipeController@form')->name('recipe.edit');
        Route::post('/','RecipeController@save')->name('recipe.save');
    });
});

Route::prefix('/inventory')->group(function (){

    Route::prefix('/summary')->group(function (){
        Route::get('/','SummaryController@index')->name('summary');
        Route::get('/show','SummaryController@show')->name('summary.show');
        Route::get('/export','SummaryController@export')->name('summary.export');
    });

    Route::prefix('/supplier')->group(function (){
        Route::get('/','SupplierController@index')->name('supplier');
        Route::get('/show','SupplierController@show')->name('supplier.show');
        Route::get('/export','SupplierController@export')->name('supplier.export');
        Route::get('/form','SupplierController@form')->name('supplier.form');
        Route::get('/form/{id}','SupplierController@form')->name('supplier.edit');
        Route::post('/','SupplierController@save')->name('supplier.save');
        Route::post('/{id}','SupplierController@update')->name('supplier.update');
        Route::get('/delete/{id}','SupplierController@delete')->name('supplier.delete');
    });

    Route::prefix('/po')->group(function (){
        Route::get('/','PoController@index')->name('po');
        Route::get('/show','PoController@show')->name('po.show');
        Route::get('/form','PoController@form')->name('po.form');
        Route::get('/form/{id}','PoController@form')->name('po.edit');
        Route::get('/product','PoController@getProduct')->name('po.product');
        Route::get('/harga','PoController@getHargaSatuan')->name('po.harga');
        Route::post('/','PoController@store')->name('po.save');
        Route::post('/{id}','PoController@update')->name('po.update');
        Route::get('/delete/{id}','PoController@delete')->name('po.delete');
        Route::get('/export','PoController@export')->name('po.export');
    });

    Route::prefix('/transfer')->group(function (){
        Route::get('/','TransferController@index')->name('transfer');
        Route::get('/show','TransferController@show')->name('transfer.show');
        Route::get('/form','TransferController@form')->name('transfer.form');
        Route::get('/form/{id}','TransferController@form')->name('transfer.edit');
        Route::get('/product','TransferController@getProduct')->name('transfer.product');
        Route::get('/harga','TransferController@getHargaSatuan')->name('transfer.harga');
        Route::post('/','TransferController@store')->name('transfer.save');
        Route::post('/{id}','TransferController@update')->name('transfer.update');
        Route::get('/delete/{id}','TransferController@delete')->name('transfer.delete');
        Route::get('/export','TransferController@export')->name('transfer.export');
    });

    Route::prefix('/adjustment')->group(function (){
        Route::get('/','AdjustmentController@index')->name('adjustment');
        Route::get('/show','AdjustmentController@show')->name('adjustment.show');
        Route::get('/form','AdjustmentController@form')->name('adjustment.form');
        Route::get('/form/{id}','AdjustmentController@form')->name('adjustment.edit');
        Route::get('/product','AdjustmentController@getProduct')->name('adjustment.product');
        Route::get('/harga','AdjustmentController@getHargaSatuan')->name('adjustment.harga');
        Route::post('/','AdjustmentController@store')->name('adjustment.save');
        Route::post('/{id}','AdjustmentController@update')->name('adjustment.update');
        Route::get('/delete/{id}','AdjustmentController@delete')->name('adjustment.delete');
        Route::get('/export','AdjustmentController@export')->name('adjustment.export');
    });

});

Route::prefix('/customer')->group(function (){

    Route::prefix('/list')->group(function (){
        Route::get('/','CustomerController@index')->name('cust');
        Route::get('/show','CustomerController@show')->name('cust.show');
        Route::get('/form','CustomerController@form')->name('cust.form');
        Route::get('/form/{id}','CustomerController@form')->name('cust.edit');
        Route::post('/','CustomerController@store')->name('cust.save');
        Route::post('/{id}','CustomerController@update')->name('cust.update');
        Route::get('/delete/{id}','CustomerController@delete')->name('cust.delete');
    });

    Route::prefix('/loyalty')->group(function (){
        Route::get('/','LoyaltyController@index')->name('loyalty');
        Route::get('/form','LoyaltyController@form')->name('loyalty.form');
        Route::post('/','LoyaltyController@save')->name('loyalty.save');
    });
});

Route::prefix('/report')->group(function (){

    Route::prefix('/sales')->group(function (){
        Route::get('/','SalesReportController@index')->name('salesreport');
        Route::get('/summaryreport','SalesReportController@summaryreport')->name('salesreport.summaryreport');
        Route::get('/summaryreport/export','SalesReportController@summaryExport')->name('salesreport.summaryreport.export');
        Route::get('/paymentmethodreport','SalesReportController@paymentmethodreport')->name('salesreport.paymentmethodreport');
        Route::get('/paymentmethodreport/export','SalesReportController@paymentExport')->name('salesreport.paymentmethodreport.export');
        Route::get('/salestypereport','SalesReportController@salestypereport')->name('salesreport.salestypereport');
        Route::get('/salestypereport/export','SalesReportController@typeExport')->name('salesreport.salestypereport.export');
        Route::get('/itemsalesreport','SalesReportController@itemsalesreport')->name('salesreport.itemsalesreport');
        Route::get('/itemsalesreport/export','SalesReportController@itemExport')->name('salesreport.itemsalesreport.export');
        Route::get('/categorysalesreport','SalesReportController@categorysalesreport')->name('salesreport.categorysalesreport');
        Route::get('/categorysalesreport/export','SalesReportController@categoryExport')->name('salesreport.categorysalesreport.export');

    });

    Route::prefix('/trx')->group(function (){
        Route::get('/','TrxReportController@index')->name('trx');
        Route::get('/show','TrxReportController@show')->name('trx.show');
        Route::get('/detail/{id}','TrxReportController@detail')->name('trx.detail');
        Route::get('/trxexport','TrxReportController@TrxExport')->name('trx.trxexport');
        Route::get('/trxdetailexport','TrxReportController@TrxDetailExport')->name('trx.trxdetailexport');
    });

    Route::prefix('/invoices')->group(function (){
        Route::get('/','InvnoiceReportController@index')->name('invoice');
        Route::get('/show','InvnoiceReportController@show')->name('invoice.show');
    });

    Route::prefix('/shift')->group(function (){
        Route::get('/','ShiftReportController@index')->name('shiftreport');
        Route::get('/show','ShiftReportController@show')->name('shiftreport.show');
        Route::get('/check','ShiftReportController@check')->name('shiftreport.check');
        Route::get('/detail/{id}','ShiftReportController@detail')->name('shiftreport.detail');
        Route::get('/export/detail','ShiftReportController@detail_export')->name('shiftreport.export.detail');
        Route::get('/trxdetailexport','ShiftReportController@TrxDetailExport')->name('shiftreport.trxdetailexport');
    });
});

Route::prefix('/setting')->group(function (){
    Route::get('/','SettingController@index')->name('setting');
    Route::post('/','SettingController@save')->name('setting.save');
});
