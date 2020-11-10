<?php
/**
 * Pharmacies
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    
    Route::group( ['namespace' => 'Pharmacies'], function () {
        Route::resource('pharmacies', 'PharmaciesController');
        //For Datatable
        Route::post('pharmacies/get', 'PharmaciesTableController')->name('pharmacies.get');
    });
    
});