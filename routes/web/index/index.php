<?php

use App\Http\Controllers\Index\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class,'index']);
