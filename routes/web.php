<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PageController@index')->name('page');

Auth::routes();

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function() {

    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::get('/{section}/{type}/{lesson}', 'LessonController@show')->name('dashboard.lesson');

    Route::post('/lesson/{id}', 'LessonController@store')->name('dashboard.lesson.complete');

    Route::post('/{lang_id}', 'DashboardController@edit')->name('dashboard.lang.edit');
});

//Последние роут!!!!

Route::get('/{parent}', 'PageController@parent')->name('page_parent');
Route::get('/{parent}/{child}', 'PageController@child')->name('page_child');
