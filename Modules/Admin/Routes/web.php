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

Route::prefix('admin')->middleware(['auth', '\Modules\Core\Http\Middleware\RoleMiddleware:admin'])->group(function() {
    Route::get('/', 'AdminController@index')->name('admin.index');
    //Route::get('/profile', 'ProfileController@index')->name('admin.profile');
    Route::prefix('profile')->group(function() {
        Route::get('/', 'ProfileController@index')->name('admin.profile');
        Route::post('update', 'ProfileController@update')->name('admin.profile.update');
    });
});
