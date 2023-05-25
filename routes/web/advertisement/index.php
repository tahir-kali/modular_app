<?php


use App\Http\Controllers\Advertisement\AdvertisementController;
use Illuminate\Support\Facades\Route;

Route::resource('/', AdvertisementController::class);
