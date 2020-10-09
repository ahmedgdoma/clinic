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
Route::get('/', function () {
    if(\Illuminate\Support\Facades\Auth::user()->role == 'patient' && is_null(\Illuminate\Support\Facades\Auth::user()->email)){
        return redirect()->route('completeProfile');
    }
    return view('welcome');
});

Route::middleware(['auth.basic', 'isPatient'])->group( function (){
    Route::get('/profile', 'PatientController@profile')
        ->middleware('PatientCompletedProfile')->name('patientProfile');

    Route::get('/completeProfile', 'PatientController@completeProfile')->name('completeProfile');
    Route::post('/completeProfile', 'PatientController@submitCompleteProfile')->name('submitCompleteProfile');
});

