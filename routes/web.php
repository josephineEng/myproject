<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\health_officerController;
use App\Http\controllers\fundController;
use App\Http\controllers\patientController;
use App\Http\Controllers\ChartJSController;
use App\Http\controllers\general_hospitalController;

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
 

route::get('/add-health_officer',[health_officerController::class,'addhealth_officer'])->name('health_officer.add');
route::post('/add-health_officer',[health_officerController::class,'savehealth_officer'])->name('save.health_officer');
route::get('/health_officer-list',[health_officerController::class,'health_officerlist'])->name('health_officer.list');
route::get('/add-funds',[fundController::class,'addfund'])->name('fund.add');
route::post('/add-funds',[fundController::class,'savefund'])->name('save.fund');
route::get('/funds-list',[fundController::class,'fundlist'])->name('funds.list');

route::get('/edit-health_officer/{id}',[health_officerController::class,'edithealth_officer'])->name('health_officer.edit');
route::get('/delete-health_officer/{id}',[health_officerController::class,'deletehealth_officer'])->name('health_officer.delete');
route::post('/update-health_officer',[health_officerController::class,'updatehealth_officer'])->name('update.health_officer');

route::get('/edit-funds/{id}',[fundController::class,'editfund'])->name('edit.fund');
route::get('/delete-funds/{id}',[fundController::class,'deletefund'])->name('delete.fund');
route::post('/update-fund',[fundController::class,'updatefund'])->name('update.fund');

route::get('/patients',[patientController::class,'patientslist'])->name('patients.list');
route::get('/general hospitals',[general_hospitalController::class,'general_hospitallist'])->name('general_hospital.list');

