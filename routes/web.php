<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StokController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BerkasController;

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

Route::get('/user', [UserController::class, 'home']);

Route::get('/user/{name}', [UserController::class, 'setName']);

Route::post('/mahasiswa', [MahasiswaController::class, 'save']);

Route::get('/mahasiswa', function () {
    return view('add-mahasiswa');
});
Route::get('/list-stok', [StokController::class, 'list']);

Route::get('/tambah-stok', function () {
    return view('tambah-stok');
});
Route::post('/simpan-stok', [StokController::class, 'simpan' ]);

Route::get('/hapus/{id}', [ StokController::class, 'hapus' ]);

Route::get('/edit/{id}', [ StokController::class, 'ubah' ]);

Route::post('/ubah', [ StokController::class, 'simpan' ]);

Route::get('/list-mahasiswa', [MahasiswaController::class, 'home']);

Route::get('/form-tambah', function(){
	return view('form-tambah');
});

Route::post('/tambah', [MahasiswaController::class, 
	'tambah']);

Route::get('/hapus-mhs/{id}', [MahasiswaController::class, 'hapus']);

Route::get('/ubah-mhs/{id}', [MahasiswaController::class,
	'formUbah']);

Route::post('/ubah-mhs', [MahasiswaController::class, 'ubah']);

Route::get('/form-unggah', function(){
	return view('form-unggah');
});

Route::post('/unggah', [ BerkasController::class, 'unggah' ]);

Route::post('/unduh', [ BerkasController::class, 'unduh' ]);