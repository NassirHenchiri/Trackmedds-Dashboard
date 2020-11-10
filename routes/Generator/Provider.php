<?php
/**
 * Providers
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    
    Route::group( ['namespace' => 'Providers'], function () {
        Route::resource('providers', 'ProvidersController');
        //For Datatable
        Route::post('providers/get', 'ProvidersTableController')->name('providers.get');
    });
    
});