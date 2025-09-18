<?php

use App\Http\Controllers\ProfileUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::controller(ProfileUserController::class)->group(function(){
    Route::get("masterData" , "masterData")->name("masterData");
    Route::get("PageShowDataUser-{user_id}" , "PageShowDataUser")->name("PageShowDataUser");
    Route::get("PageEditDataUser-{user_id}" , "PageEditDataUser")->name("PageEditDataUser");
    Route::post("EditDataUser-{user_id}" ,"EditDataUser")->name("EditDataUser");
    Route::post("UserLogout" , "UserLogout")->name("UserLogout");
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
