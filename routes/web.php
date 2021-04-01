<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/', [App\Http\Controllers\TweetsController::class, 'index']);

Route::get('/tweets/create', [App\Http\Controllers\TweetsController::class, 'create']);

Route::post('/tweets/create', [App\Http\Controllers\TweetsController::class, 'store']);

Route::get('/tweets/{id}/edit', [App\Http\Controllers\TweetsController::class, 'edit']);

Route::put('/tweets/{id}/edit', [App\Http\Controllers\TweetsController::class, 'update']);

Route::delete('/tweets/{id}/delete', [App\Http\Controllers\TweetsController::class, 'destroy']);

Route::get('/explore', [App\Http\Controllers\ProfileController::class, 'getIndex']);

Route::get('/profiles',  [App\Http\Controllers\ProfileController::class, 'profiles']);

Route::get('profile/{username}', [App\Http\Controllers\ProfileController::class, 'show'])->name('show');

Route::get('profile/{username}/followers', [App\Http\Controllers\ProfileController::class, 'followers']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/following', [App\Http\Controllers\ProfileController::class, 'following']);
    Route::get('/follows/profile/{username}', [App\Http\Controllers\UserController::class, 'follows']);
    Route::get('/unfollows/profile/{username}', [App\Http\Controllers\UserController::class, 'unfollows']);
});

Route::post('/comments',  [App\Http\Controllers\CommentController::class, 'store']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');






