<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::group(["prefix" => "dashboard" ], function () {

    // Registration and Login Authentication Middlewate for Admin Start

    Route::controller(AdminAuthController::class)->group(function(){
        Route::get('/login', 'index')->name('admin.login');
        Route::post('/authenticate', 'authenticate')->name('admin.authenticate');
        Route::get('/register', 'register')->name('admin.register');
        Route::post('/register', 'store')->name('admin.store');
    });

    // Registration and Login Authentication Middlewate for Admin End


    // Authentication and Authorization Middleware for Admin Start
    Route::middleware(['middleware' => 'auth_admin'])->group(function () {
        Route::controller(AdminController::class)->group(function(){
            Route::get('/', 'index')->name('admin.dashboard');
            Route::get('/logout', 'logout')->name('admin.logout'); 
        });

        Route::controller(CategoryController::class)->prefix('categories')->group(function () {
            Route::get('', 'index')->name('categories.index');
            Route::get('create', 'create')->name('categories.create');
            Route::get('edit/{id}', 'edit')->name('categories.edit');
            Route::post('store', 'store')->name('categories.store');
            Route::delete('delete/{id}', 'destroy')->name('categories.delete');
            Route::post('category_image/update','updateCategoryImage')->name('categories.updateImage');
            Route::delete('category_image','deleteCategoryImage')->name('categories.deleteImage');
        });
        
    });

    // Authentication and Authorization Middleware for Admin End
});

Route::controller(FrontController::class)->group(function(){
    Route::get('/', 'index')->name('home');
    Route::get('contact_us', 'contactUs')->name('front.contactUs');
});


Route::get('jazzcash', function(){
    return view('jazzcash');
});

