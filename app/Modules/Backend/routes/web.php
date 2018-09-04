<?php
//http://localhost/crudUpload-laravel/public/backend/
Route::group(['module' => 'Backend', 'middleware' => ['web'], 'namespace' => 'App\Modules\Backend\Controllers'], function() {

    Route::resource('backend', 'BackendController');

    Route::get('/article', 'ArticleController@index');
    Route::get('/article/get_datatable', 'ArticleController@get_datatable');
});
