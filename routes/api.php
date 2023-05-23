<?php

use Illuminate\Support\Facades\Route;

Route::name('api.')->group(function () {
    include_once __DIR__ . '/api/advertisement/advertisement.php';
    include_once __DIR__ . '/api/category/tree.php';
    include_once __DIR__ . '/api/file/store.php';
});
