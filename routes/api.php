<?php

use Illuminate\Support\Facades\Route;

Route::name('api.')->group(function () {
    include_once __DIR__ . '/api/advertisement/list.php';
    include_once __DIR__ . '/api/advertisement/store.php';
    include_once __DIR__ . '/api/category/tree.php';
    include_once __DIR__ . '/api/file/store.php';
});
