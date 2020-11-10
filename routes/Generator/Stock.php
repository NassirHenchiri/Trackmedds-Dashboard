<?php
/**
 * Stocks
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    
    Route::group( ['namespace' => 'Stocks'], function () {
        Route::resource('stocks', 'StocksController');
        //For Datatable
        Route::post('stocks/get', 'StocksTableController')->name('stocks.get');
    });
    
});