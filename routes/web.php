<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'codility', 'middleware' => 'auth' ], function () {
    Route::get('binarygap/{n}', 'codilityController@binaryGap');
    Route::get('binarygap2/{n}', 'codilityController@binaryGap2');
    Route::get('cyclicrotation', 'codilityController@cyclicRotation');
    Route::get('oddoccurrencesinarray', 'codilityController@oddOccurrencesInArray');
    Route::get('tapeequilibrium', 'codilityController@TapeEquilibrium');
    Route::get('forjump', 'codilityController@forJump');
    Route::get('permmissingelem', 'codilityController@permMissingElem');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
