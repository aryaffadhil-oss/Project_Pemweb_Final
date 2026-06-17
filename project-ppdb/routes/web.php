<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PPDBController;

Route::get('/', [PPDBController::class, 'index']);