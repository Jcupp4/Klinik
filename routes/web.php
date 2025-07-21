<?php

use App\Http\Controllers\AuthC;
use App\Http\Controllers\DashC;
use App\Http\Controllers\IcdC;
use App\Http\Controllers\pasien\PasienC;
use App\Http\Controllers\SesiBerobatC;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', [DashC::class, 'dashboard'])->middleware('auth');

Route::get('/login', [AuthC::class, 'login'])->name('login');
Route::post('/login', [AuthC::class, 'loginStore'])->name('login.store');
Route::get('/register', [AuthC::class, 'register'])->name('register');
Route::post('/register', [AuthC::class, 'registerStore'])->name('register.store');
Route::get('/logout', [AuthC::class, 'logout'])->name('logout');

Route::prefix('pasien')->name('pasien.')->group(function () {
    Route::get('/', [PasienC::class, 'index'])->name('table');       // /pasien
    Route::get('/create', [PasienC::class, 'create'])->name('form'); // /pasien/create
    Route::post('/store', [PasienC::class, 'store'])->name('store'); // /pasien/store
});

Route::prefix('icd')->name('icd.')->group(function () {
    Route::get('/import-icd', [IcdC::class, 'importFromCdcTxt']);
    Route::get('/', [IcdC::class, 'index'])->name('form');
});

Route::get('/sesi-berobat/create', [SesiBerobatC::class, 'create'])->name('sesi.create');
Route::post('/sesi-berobat/store', [SesiBerobatC::class, 'store'])->name('sesi.store');
