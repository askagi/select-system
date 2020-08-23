<?php

use Illuminate\Support\Facades\Route;

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

Route::get('dashboard', function () {
    return view('admin.home.index');
});

Route::prefix('dashboard')->name('dashboard.')->namespace('Admin')->group(function(){
    Route::resource('students', 'StudentController');
    Route::post('/students/search', 'StudentController@search')->name('students.search');
    Route::resource('modalities', 'ModalityController');
    Route::resource('teachers', 'TeacherController');
    Route::resource('groups', 'GroupController');
    Route::resource('schedules', 'ScheduleController');
    Route::resource('studentgroup', 'StudentGroupController');

});
