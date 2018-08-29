<?php

Route::group(['prefix' => 'api/v1', 'namespace' => 'App\Api\Controllers'], function () {
    //
    Route::resource('users', 'UserController');
});
