<?php

use App\Core\Http\Controllers\Advertisement\AdvertisementController;
use Illuminate\Support\Facades\Route;

Route::resource('/advertisement', AdvertisementController::class);
