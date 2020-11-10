<?php

/*
 * Reclamations Management
 */
Route::group(['namespace' => 'Reclamations'], function () {
    Route::resource('reclamations', 'ReclamationsController', ['except' => ['show']]);

    //For DataTables
    Route::post('reclamations/get', 'ReclamationsTableController')->name('reclamations.get');

    // Status
    Route::get('reclamations/{reclamation}/mark/{status}', 'ReclamationStatusController@store')->name('reclamations.mark')->where(['status' => '[0,1]']);
});
