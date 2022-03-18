<?php

use App\Http\Controllers\UserController;
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

// Route::get('/', 'UserController@index');
// Route::post('users','UserController@store')->name('users.store');
// Route::delete('users/{user}','UserController@destroy')->name('users.destroy');

Route::controller(UserController::class)->group(function() {
    Route::get('/', 'index');
    Route::post('/users', 'store')->name('users.store');
    Route::delete('/users/{user}', 'destroy')->name('users.destroy');
});
