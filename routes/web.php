<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

// Route::get('/', function () {
//     return view('main');
// });

Route::get('/', [MainController::class, 'index']);