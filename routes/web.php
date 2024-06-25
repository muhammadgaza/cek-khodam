<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\khodamController;

Route::get('/', [khodamController::class, 'index']);
Route::post('/prediksi', [khodamController::class, 'prediksi']);
