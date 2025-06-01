<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\St_reg_infoController;
use App\Http\Controllers\Mo_reg_infoController;
use App\Http\Controllers\Fa_reg_infoController;
use App\Http\Controllers\St_education_infoController;

Route::resource('students', St_reg_infoController::class);
Route::resource('mothers', Mo_reg_infoController::class)->only(['create', 'store']);
Route::resource('fathers', Fa_reg_infoController::class)->only(['create', 'store']);
Route::resource('educations', St_education_infoController::class)->only(['create', 'store']);

