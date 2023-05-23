<?php

use Illuminate\Support\Facades\Route;
use Modules\Advertisement\Http\Controllers\AdvertisementController;

Route::get('/advertisement', [AdvertisementController::class,'index']);
