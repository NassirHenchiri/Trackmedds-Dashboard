<?php
/**
 * Routes for : Commandes
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
	
	Route::group( ['namespace' => 'Commandes'], function () {
	    Route::get('commandes', 'CommandesController@index')->name('commandes.index');
	    Route::get('commandes/create', 'CommandesController@create')->name('commandes.create');
	    Route::post('commandes', 'CommandesController@store')->name('commandes.store');
      
	    Route::get('commandes/{commande}/edit', 'CommandesController@edit')->name('commandes.edit');
	    Route::patch('commandes/{commande}', 'CommandesController@update')->name('commandes.update');
	    
	    //For Datatable
	    Route::post('commandes/get', 'CommandesTableController')->name('commandes.get');
	});
	
});