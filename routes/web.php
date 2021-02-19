<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\health_officerController;
use App\Http\controllers\fundController;
use App\Http\controllers\patientController;
use App\Http\Controllers\ChartJSController;
use App\Http\controllers\general_hospitalController;
use App\Http\controllers\regionalController;
use App\Http\controllers\nationalController;

/*
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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/patients', function () {
    return view('patients');
});
Route::get('/Hospitals', function () {
    return view('Hospitals');
});
Route::get('/health officers', function () {
    return view('health officers');
});

Route::get('/per health officer', function () {
    return view('per health officer');
});
Route::get('/percentage change', function () {
    return view(' percentage change');
});
Route::get('/Summary', function () {
    return view('Summary');
});
Route::get('/Treasury', function () {
    return view('Treasury');
});
Route::get('/payments', function () {
    return view('payments');
});

Route::get('/variation', function () {
    return view('variation');
});
Route::resource('funds','fundsController');

Route::get('/create', function () {
    return view('create');
});
Route::get('/donations graph', function () {
    return view('donations graph');
});
Route::get('/register health officers', function () {
    return view('register health officers');
});
Route::get('/general hospitals', function () {
    return view('general hospitals');
});
Route::get('/regional referral hospitals', function () {
    return view('regional referral hospitals');
});
Route::get('/national referral hospitals', function () {
    return view('national referral hospitals');
});
Route::get('/create account', function () {
    return view('create account');
});
Route::get('/signout', function () {
    return view('signout');
});
 
Route::get('/hierarchy', function () {
    return view('hierarchy');
});

Route::get('/image', function () {
    return view('image');
});
 

Route::get('/add-health_officer',[health_officerController::class,'addhealth_officer'])->name('health_officer.add');
Route::post('/add-health_officer',[health_officerController::class,'savehealth_officer'])->name('save.health_officer');
Route::get('/health_officer-list',[health_officerController::class,'health_officerlist'])->name('health_officer.list');
Route::get('/add-funds',[fundController::class,'addfund'])->name('fund.add');
Route::post('/add-funds',[fundController::class,'savefund'])->name('save.fund');
Route::get('/funds-list',[fundController::class,'fundlist'])->name('funds.list');

Route::get('/edit-health_officer/{id}',[health_officerController::class,'edithealth_officer'])->name('health_officer.edit');
Route::get('/delete-health_officer/{id}',[health_officerController::class,'deletehealth_officer'])->name('health_officer.delete');
Route::post('/update-health_officer',[health_officerController::class,'updatehealth_officer'])->name('update.health_officer');

Route::get('/edit-funds/{id}',[fundController::class,'editfund'])->name('edit.fund');
Route::get('/delete-funds/{id}',[fundController::class,'deletefund'])->name('delete.fund');
Route::post('/update-fund',[fundController::class,'updatefund'])->name('update.fund');

Route::get('/patients',[patientController::class,'patientslist'])->name('patients.list');
Route::get('/general hospitals',[general_hospitalController::class,'general_hospitallist'])->name('general_hospital.list');
Route::get('/regional referral hospitals',[regionalController::class,'regionallist'])->name('regional.list');
Route::get('/national referral hospitals',[nationalController::class,'nationallist'])->name('national.list');