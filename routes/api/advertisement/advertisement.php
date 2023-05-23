<?php


use Illuminate\Support\Facades\Route;
use Modules\Advertisement\Http\Controllers\AdvertisementController;

Route::group([
    'prefix'     => 'advertisement',
    'as'         => 'advertisement.',
    'namespace'  => 'Advertisement',
], function () {

    Route::post('/store', [AdvertisementController::class,'store']);

});
