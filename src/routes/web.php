<?php 

Route::group(['namespace' => 'Ssdpkg\Contact\Http\Controllers'], function() {
    Route::get('contact', 'ContactController@index')->name('contact');

    Route::post('contact', 'ContactController@send');
});
