<?php

Route::get('/', function () {
    return view('certificate.create');
});
Route::group(['prefix' => 'certificate'], function () {
    Route::get('create', 'CourseController@createCertificate')->name('create.certificate');
    Route::get('post', 'CourseController@generateCertificate')->name('generate.certificate');
});
