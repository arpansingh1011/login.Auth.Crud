<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('dashboard',[UserAuthController::class,'loginuser']);
Route::get('login',[UserAuthController::class,'login']); 
Route::get('register',[UserAuthController::class,'register']);
Route::Post('create',[UserAuthController::class,'create'])->name('create');
Route::get('list',[UserAuthController::class,'show']);
//Route::get('role',[UserAuthController::class,'role']);
Route::post('loginuser',[UserAuthController::class,'loginuser'])->name('loginuser');
Route::get('delete/{id}',[UserAuthController::class,'delete']);
Route::get('edit/{id}',[UserAuthController::class,'showdata']);
Route::post('edit',[UserAuthController::class,'update']);
Route::get('AddRole',[UserAuthController::class,'addrole']);
Route::post('Roleuser',[UserAuthController::class,'createrole']);

