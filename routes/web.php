<?php

<<<<<<< HEAD
use Illuminate\Support\Facades\Hash;
=======
use App\Http\Controllers\UserController;
>>>>>>> 069e5e6134aff939dca2794c606ca16ab9f035f7
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
})->middleware('auth');

Route::resource('users', UserController::class);

Route::get('/dashboard', function () {

    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
