<?php

use App\http\Controllers\lahanController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::resource('lahan', lahanController::class);
Route::get('/get-kabupaten/{provinsiId}', [lahanController::class, 'getKabupatenByProvinsi']); // Correct namespace
Route::get('/get-kecamatan/{kabupatenId}', [lahanController::class, 'getKecamatanByKabupaten']); // Correct namespace
