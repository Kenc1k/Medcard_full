<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\KlinikaController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\TumanController;
use App\Http\Controllers\ViloyatController;
use Illuminate\Support\Facades\Route;

Route::get('/' , [PatientController::class, 'index']);


Route::get('/viloyat' , [ViloyatController::class , 'index']);



Route::get('/tuman' , [TumanController::class , 'index']);


Route::get('/klinika' , [KlinikaController::class, 'index']);



Route::get('/doctor' , [DoctorController::class, 'index']);