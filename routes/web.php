<?php

use App\http\Controllers\lahanController;
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
    return view('welcome');
});

Route::resource('lahan', lahanController::class);
Route::get('/get-kabupaten/{provinsiId}', [lahanController::class, 'getKabupatenByProvinsi']); // Correct namespace
Route::get('/get-kecamatan/{kabupatenId}', [lahanController::class, 'getKecamatanByKabupaten']); // Correct namespace
