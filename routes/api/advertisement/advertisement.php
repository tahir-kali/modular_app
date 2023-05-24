<?php


use App\Http\Controllers\Advertisement\AdvertisementController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix'     => 'advertisement',
    'as'         => 'advertisement.',
    'namespace'  => 'Advertisement',
], function () {

    Route::post('/store', [AdvertisementController::class,'store']);
    Route::get('/', [AdvertisementController::class,'show']);
    Route::put('/update', [AdvertisementController::class,'update']);

});
