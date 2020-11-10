<?php
/**
 * Routes for : Mypharmacies
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
	
	Route::group( ['namespace' => 'Mypharmacies'], function () {
	    Route::get('mypharmacies', 'MypharmaciesController@index')->name('mypharmacies.index');
	    Route::get('mypharmacies/create', 'MypharmaciesController@create')->name('mypharmacies.create');
	    Route::post('mypharmacies', 'MypharmaciesController@store')->name('mypharmacies.store');
	    Route::get('mypharmacies/{mypharmacy}/edit', 'MypharmaciesController@edit')->name('mypharmacies.edit');
	    Route::patch('mypharmacies/{mypharmacy}', 'MypharmaciesController@update')->name('mypharmacies.update');
	    
	    //For Datatable
	    Route::post('mypharmacies/get', 'MypharmaciesTableController')->name('mypharmacies.get');
	});
	
});