<?php

use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Hash;
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
Route::get('register',function(){
    return view('register');
});
Route::get('/', function () {

   return view('index');
})->middleware('auth')->name('homepage');

Route::resource('users',UsersController::class)->middleware('auth');
Route::post('users/getData',[UsersController::class, 'getData'])->name('users.getData');

Route::resource('patients',PatientsController::class)->middleware('auth');

Route::get('patients/{patient}/file',[FileController::class,'file'])->name('file')->middleware('auth');


Route::post('patients/{patient}/store',[FileController::class,'store'])->name('upload_file');



Route::post('patients/getData',[PatientsController::class, 'getData'])->name('patients.getData');


Route::resource('files',FileController::class)->middleware('auth');



Route::resource('appointments',AppointmentsController::class)->middleware('auth');
Route::get('calendar-event', [AppointmentsController::class, 'calendarEvent']);
Route::post('calendar-crud-ajax', [AppointmentsController::class, 'calendarEvents']);


Route::get('/dashboard', function () {

    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
