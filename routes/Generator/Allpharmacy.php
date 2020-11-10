<?php
/**
 * Allpharmacies
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    
    Route::group( ['namespace' => 'Allpharmacies'], function () {
        Route::resource('allpharmacies', 'AllpharmaciesController');
        //For Datatable
        Route::post('allpharmacies/get', 'AllpharmaciesTableController')->name('allpharmacies.get');
    });
    
});