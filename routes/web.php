<?php

use Carbon\Carbon;
use App\Models\Appointment;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DebtorsController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\CreditorsController;
use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\SubPayementsController;
use App\Http\Controllers\SurgeryKindsController;
use Random\Randomizer;

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


Route::get('/prodview',[AppointmentsController::class,'prodfunct']);

Route::post('appointment/getData',[AppointmentsController::class, 'getData'])->name('appointment.getData');
Route::post('appointment/createnewappointment',[AppointmentsController::class, 'createnewappointment'])->name('appointment.createnewappointment');

Route::post('appointment/getTodayData',[AppointmentsController::class, 'getTodayData'])->name('appointment.getTodayData');
Route::get('appointment/today_appointment',[AppointmentsController::class, 'today_appointment'])->name('appointment.today_appointment');


Route::resource('debtors',DebtorsController::class)->middleware('auth');
Route::post('debtors/getdebtorsData',[DebtorsController::class, 'getdebtorsData'])->name('debtors.getdebtorsData');


Route::resource('creditors',CreditorsController::class)->middleware('auth');
Route::post('creditors/getcreditorsData',[CreditorsController::class, 'getcreditorsData'])->name('creditors.getcreditorsData');

Route::resource('surgerykinds',SurgeryKindsController::class)->middleware('auth');
Route::post('surgerykinds/getSurgerykindData',[SurgeryKindsController::class, 'getSurgerykindData'])->name('surgerykind.getSurgerykindData');


Route::get('/findProductName',[AppointmentsController::class,'findProductName']);
Route::get('/findPrice',[AppointmentsController::class,'findPrice']);

Route::resource('payments',PaymentController::class)->middleware('auth');
Route::post('payments/getData',[PaymentController::class, 'getData'])->name('payments.getData');


// Route::resource('subpayments',SubPayementsController::class)->middleware('auth');



Route::get('expenses/today_expenses',[ExpenseController::class, 'today_expenses'])->name('expenses.today_expenses');
Route::resource('expenses',ExpenseController::class)->middleware('auth');
Route::post('expenses/getData',[ExpenseController::class, 'getData'])->name('expenses.getData');

Route::post('expenses/today_expenses',[ExpenseController::class, 'getData_Today'])->name('today_expenses');



Route::resource('users',UsersController::class)->middleware('auth');
Route::post('users/getData',[UsersController::class, 'getData'])->name('users.getData');
Route::get('appointment/{id}/patient', [PatientsController::class, 'addAppointmentToPatient'])->name('addAppointmentToPatient');
Route::get('appointment/createnewappointment', [PatientsController::class, 'createnewappointment'])->name('createnewappointment');
Route::resource('patients',PatientsController::class)->middleware('auth');

Route::get('patients/{patient}/file',[FileController::class,'file'])->name('file')->middleware('auth');


Route::post('patients/{patient}/store',[FileController::class,'store'])->name('upload_file');



Route::post('patients/getData',[PatientsController::class, 'getData'])->name('patients.getData');


Route::resource('files',FileController::class)->middleware('auth');



Route::resource('appointments',AppointmentsController::class)->middleware('auth');

Route::post('appointments/{appointment}/{patient}',[AppointmentsController::class,'paid'])->name('appointments.paid');
// Route::get('pdf', [PDFController::class,'index']);

Route::get('pdf',[PDFController::class, 'index']);
Route::get('download',[PDFController::class, 'download']);
// Route::get('appointment/generate', [AppointmentsController::class, 'generatePDF'])->name('pdf.generate');


Route::get('/dashboard', function () {

    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('pdf-expenses',[PDFController::class, 'expenses_date'])->name('expenses_date');
Route::get('pdf-payments',[PDFController::class, 'payments_date'])->name('payments_date');


