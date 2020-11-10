<?php
/**
 * Routes for : RoleUser
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
	
	Route::group( ['namespace' => 'RoleUser'], function () {
	    Route::get('roleusers', 'RoleUsersController@index')->name('roleusers.index');
	    
	    
	    
	    //For Datatable
	    Route::post('roleusers/get', 'RoleUsersTableController')->name('roleusers.get');
	});
	
});