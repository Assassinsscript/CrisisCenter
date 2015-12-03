<?php

use App\Http\Controllers\VictimsController;

Route::controller('auth', 'Auth\AuthController');

Route::group(['prefix' => 'victims'], function () use ($router)
{
    VictimsController::routes($router);
});