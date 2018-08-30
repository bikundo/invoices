<?php

Route::group(['prefix' => 'api/v1', 'namespace' => 'App\Api\Controllers'], function () {
    //
    Route::resource('users', 'UserController');
    Route::resource('invoices', 'InvoiceController');
    Route::resource('customers', 'CustomerController');
    Route::resource('invoice_items', 'InvoiceItemController');
});
