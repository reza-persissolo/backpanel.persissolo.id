<?php

<<<<<<< Updated upstream
use App\Http\Controllers\GaleryImageController;
use App\Http\Controllers\GaleryVideoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SponsorController;
=======
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
>>>>>>> Stashed changes
use Illuminate\Support\Facades\Route;

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

<<<<<<< Updated upstream
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('/login')->group(function (){
    Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/', [LoginController::class, 'login']);
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

=======
Route::get('/', function () {
    return view('home.view');
});

Route::get('/home', [HomeController::class, 'index']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');;

// Route::prefix('/login')->group(function (){
//     Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
//     Route::post('/','LoginController@login');
//     Route::post('/logout','LoginController@logout')->name('logout');
// });

>>>>>>> Stashed changes
Route::prefix('/reset')->group(function (){
    Route::get('/','ResetPasswordController@showResetForm')->name('resetpassword');
    Route::post('/','ResetPasswordController@reset');
});

Route::prefix('/register')->group(function (){
    Route::get('/','RegisterController@showRegisterForm')->name('register');
    Route::post('/','RegisterController@register');
});
<<<<<<< Updated upstream

Route::prefix('/galery')->group(function (){
    Route::prefix('/image')->group(function (){
        Route::get('/', [GaleryImageController::class, 'index'])->name('galeryimage');
        Route::get('/show', [GaleryImageController::class, 'show'])->name('galeryimage.show');
        Route::get('/form', [GaleryImageController::class, 'form'])->name('galeryimage.form');
        Route::get('/form/{id}', [GaleryImageController::class, 'form'])->name('galeryimage.edit');
        Route::post('/', [GaleryImageController::class, 'save'])->name('galeryimage.save');
        Route::post('/{id}', [GaleryImageController::class, 'update'])->name('galeryimage.update');
        Route::get('/delete/{id}', [GaleryImageController::class, 'delete'])->name('galeryimage.delete');
    });
    
    Route::prefix('/video')->group(function (){
        Route::get('/', [GaleryVideoController::class, 'index'])->name('galeryvideo');
        Route::get('/show', [GaleryVideoController::class, 'show'])->name('galeryvideo.show');
        Route::get('/form', [GaleryVideoController::class, 'form'])->name('galeryvideo.form');
        Route::get('/form/{id}', [GaleryVideoController::class, 'form'])->name('galeryvideo.edit');
        Route::post('/', [GaleryVideoController::class, 'save'])->name('galeryvideo.save');
        Route::post('/{id}', [GaleryVideoController::class, 'update'])->name('galeryvideo.update');
        Route::get('/delete/{id}', [GaleryVideoController::class, 'delete'])->name('galeryvideo.delete');
    });

});

Route::prefix('/news')->group(function (){
    Route::get('/', [NewsController::class, 'index'])->name('news');
    Route::get('/show', [NewsController::class, 'show'])->name('news.show');
    Route::get('/form', [NewsController::class, 'form'])->name('news.form');
    Route::get('/form/{id}', [NewsController::class, 'form'])->name('news.edit');
    Route::post('/', [NewsController::class, 'save'])->name('news.save');
    Route::post('/{id}', [NewsController::class, 'update'])->name('news.update');
    Route::get('/delete/{id}', [NewsController::class, 'delete'])->name('news.delete');
});

Route::prefix('/sponsor')->group(function (){
    Route::get('/', [SponsorController::class, 'index'])->name('sponsor');
    Route::get('/show', [SponsorController::class, 'show'])->name('sponsor.show');
    Route::get('/form', [SponsorController::class, 'form'])->name('sponsor.form');
    Route::get('/form/{id}', [SponsorController::class, 'form'])->name('sponsor.edit');
    Route::post('/', [SponsorController::class, 'save'])->name('sponsor.save');
    Route::post('/{id}', [SponsorController::class, 'update'])->name('sponsor.update');
    Route::get('/delete/{id}', [SponsorController::class, 'delete'])->name('sponsor.delete');
});
=======
>>>>>>> Stashed changes
