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

Route::get('/', function () {
    return view('home.index');
});
Route::get('/about', function () {
    return view('home.index');
})->name('about');
Route::get('/contact', function () {
    return view('home.index');
})->name('contact');
Route::get('/test', function () {
    return view('students.home');
})->name('contact');

Route::get('/Students_files', 'Students\Students@index')->name('Students_files');
Route::get('/Students_social', 'Students\Students@social')->name('Students_social');
Route::post('/social_father', 'Students\Students@father')->name('social_father');
Route::post('/Social_mother', 'Students\Students@mother')->name('Social_mother');

//Setting routes///////////////////////////////////////////////////////////////////////
Route::get('/grades', 'Setting\Classrooms\Grades@index')->name('grades');
Route::get('/Grades_edit/{id}', 'Setting\Classrooms\Grades@edit')->name('Grades_edit');
Route::post('/Grades_update/{id}', 'Setting\Classrooms\Grades@update')->name('Grades_update');
Route::post('/Grades_delete', 'Setting\Classrooms\Grades@delete')->name('Grades_delete');

Route::get('/classrooms', 'Setting\Classrooms\Classrooms@index')->name('classrooms');
Route::get('/Classrooms_edit/{id}', 'Setting\Classrooms\Classrooms@edit')->name('Classrooms_edit');
Route::post('/Classrooms_update/{id}', 'Setting\Classrooms\Classrooms@update')->name('Classrooms_update');
Route::post('/Classrooms_delete', 'Setting\Classrooms\Classrooms@delete')->name('Classrooms_delete');


Route::get('/employees', [
    'as' => 'employees',
    'uses' => 'Setting\Employees\Employees@index'
]);

Route::get('/transportation_lines', [
    'as' => 'transportation lines',
    'uses' => 'Setting\Transportations\Transportation_lines@index'
]);
Route::get('/transportation_areas', [
    'as' => 'transportation_areas',
    'uses' => 'Setting\Transportations\Transportation_areas@index'
]);
Route::get('/drivers', [
    'as' => 'drivers',
    'uses' => 'Setting\Transportations\Drivers@index'
]);
Route::get('/jobs', [
    'as' => 'jobs',
    'uses' => 'Setting\Employees\Jobs@index'
]);
Route::get('/qualifications', [
    'as' => 'qualifications',
    'uses' => 'Setting\Employees\Qualifications@index'
]);
Route::get('/subjects', [
    'as' => 'subjects',
    'uses' => 'Setting\General\Subjects@index'
]);
Route::get('/feesTypes', [
    'as' => 'feesType',
    'uses' => 'Setting\General\Fees_Types@index'
]);
Route::get('/studyYears', [
    'as' => 'studyYears',
    'uses' => 'Setting\General\Study_years@index'
]);
Route::get('/Classroom_supervisors', [
    'as' => 'Classroom_supervisors',
    'uses' => 'Setting\Classrooms\Classroom_supervisors@index'
]);
Route::get('/classFees', [
    'as' => 'classFees',
    'uses' => 'Setting\Classrooms\Class_Fees@index'
]);
Route::post('/newGrade', [
    'as' => 'newGrade',
    'uses' => 'Setting\Classrooms\Grades@newGrade'
]);
Route::post('/newClassroom', [
    'as' => 'newClassroom',
    'uses' => 'Setting\Classrooms\Classrooms@newClassroom'
]);
Route::post('/newTransportation_lines', [
    'as' => 'newTransportation_lines',
    'uses' => 'Setting\Transportations\Transportation_lines@newLine'
]);
Route::post('/newTransportation_area', [
    'as' => 'newTransportation_areas',
    'uses' => 'Setting\Transportations\Transportation_areas@newArea'
]);
Route::post('/newDriver', [
    'as' => 'newDriver',
    'uses' => 'Setting\Transportations\Drivers@newDriver'
]);
Route::post('/newJob', [
    'as' => 'newJob',
    'uses' => 'Setting\Employees\Jobs@newJob'
]);
Route::post('/newQualification', [
    'as' => 'newQualification',
    'uses' => 'Setting\Employees\Qualifications@newQualification'
]);
Route::post('/newSubject', [
    'as' => 'newSubject',
    'uses' => 'Setting\General\Subjects@newSubject'
]);
Route::post('/newFeesType', [
    'as' => 'newFeesType',
    'uses' => 'Setting\General\Fees_Types@newFeesType'
]);
Route::post('/newClassFee', [
    'as' => 'newClassFee',
    'uses' => 'Setting\Classrooms\Class_fees@newClassFee'
]);
Route::post('/newStudyYear', [
    'as' => 'newStudyYear',
    'uses' => 'Setting\General\Study_years@newStudyYear'
]);
Route::post('/newSupervisor', [
    'as' => 'newSupervisor',
    'uses' => 'Setting\Classrooms\Classroom_supervisors@newSupervisor'
]);
Route::post('/newEmployee', [
    'as' => 'newEmployee',
    'uses' => 'Setting\Employees\Employees@newEmp'
]);
