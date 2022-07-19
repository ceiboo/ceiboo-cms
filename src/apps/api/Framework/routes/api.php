<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['api'])->namespace('Ceiboo\Api\Controllers')->group(function () {
    Route::put('users/{id}', 'Users\UsersPutController');
});
