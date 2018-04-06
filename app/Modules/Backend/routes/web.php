<?php

Route::group(['module' => 'Backend', 'middleware' => ['web'], 'namespace' => 'App\Modules\Backend\Controllers'], function() {

    Route::resource('backend', 'BackendController');

});
