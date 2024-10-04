<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DisplayController;

Route::get('/', [DisplayController::class, 'index']);
