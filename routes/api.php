<?php

use Illuminate\Support\Facades\Route;


//route login
Route::post('login', [App\Http\Controllers\Api\Auth\LoginController::class, 'index']);
Route::post('register', [App\Http\Controllers\Api\Auth\RegisterController::class, 'index']);
Route::post('password/forgot', [App\Http\Controllers\Api\Auth\ForgotPasswordController::class, 'index']);

Route::post('password/reset', [App\Http\Controllers\Api\Auth\ForgotPasswordController::class, 'reset']);
// Password Reset Routes
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');


//group route with middleware "auth"
Route::group(['middleware' => 'auth:api'], function() {
//logout
Route::get('/logout', [App\Http\Controllers\Api\Auth\LoginController::class, 'logout']);

});
Route::group(['middleware' => 'auth:api'], function () {
Route::get('/threads', [App\Http\Controllers\Api\Public\ThreadController::class, 'index']);
Route::post('/threads', [App\Http\Controllers\Api\Public\ThreadController::class, 'store']);
Route::patch('/threads/{thread}', [App\Http\Controllers\Api\Public\ThreadController::class, 'update']);
Route::get('/threads/{thread}', [App\Http\Controllers\Api\Public\ThreadController::class, 'show']);
Route::delete('/threads/{thread}', [App\Http\Controllers\Api\Public\ThreadController::class, 'destroy']);

Route::get('/profile', [App\Http\Controllers\Api\Public\ProfileController::class, 'index']);
Route::patch('/profile', [App\Http\Controllers\Api\Public\ProfileController::class, 'update']);
Route::patch('/profile/change-avatar', [App\Http\Controllers\Api\Public\ProfileController::class, 'change_avatar']);
Route::patch('/profile/change-bio', [App\Http\Controllers\Api\Public\ProfileController::class, 'change_bio']);
Route::patch('/profile/change-password', [App\Http\Controllers\Api\Public\ProfileController::class, 'change_password']);

Route::get('/scientific-works', [App\Http\Controllers\Api\Public\ScientificWorkController::class, 'index']);
Route::post('/scientific-works', [App\Http\Controllers\Api\Public\ScientificWorkController::class, 'store']);
Route::patch('/scientific-works/{scientificwork}', [App\Http\Controllers\Api\Public\ScientificWorkController::class, 'update']);
Route::get('/scientific-works/{scientificwork}', [App\Http\Controllers\Api\Public\ScientificWorkController::class, 'show']);
Route::delete('/scientific-works/{scientificwork}', [App\Http\Controllers\Api\Public\ScientificWorkController::class, 'delete']);
});

Route::prefix('admin')->group(function () {
    //group route with middleware "auth:api"
    Route::group(['middleware' => 'auth:api'], function () {
        Route::apiResource('/users', App\Http\Controllers\Api\Admin\UserController::class);

    });
});


Route::prefix('public')->group(function () {
    Route::get('threads', [App\Http\Controllers\Api\Public\ThreadController::class, 'index']);
    Route::get('scientific-works', [App\Http\Controllers\Api\Public\ScientificWorkController::class, 'homepage']);
    Route::get('threads-home', [App\Http\Controllers\Api\Public\ThreadController::class, 'homepage']);
    Route::get('users', [App\Http\Controllers\Api\Public\UserController::class, 'index']);
});
