<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CvExportController;

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


// SIMPLE CV's

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cv-four', function () {
    return view('cv.index-four-cv');
});
Route::get('/cv-five', function () {
    return view('cv.index-five-cv');
});
Route::get('/cv-six', function () {
    return view('cv.index-six-cv');
});
Route::get('/cv-seven', function () {
    return view('cv.index-seven-cv');
});
Route::get('/cv-eight', function () {
    return view('cv.index-eight-cv');
});
Route::get('/cv-nine', function () {
    return view('cv.index-nine-cv');
});


// EXPORT CV's


Route::get('/cv-export-4', function () {
    return view('cv-exports.index-export-four');
});

Route::get('/cv-export-5', function () {
    return view('cv-exports.index-export-five');
});
Route::get('/cv-export-6', function () {
    return view('cv-exports.index-export-six');
});
Route::get('/cv-export-7', function () {
    return view('cv-exports.index-export-seven');
});




// DOMPDF template



Route::get('/cv-export-four', [CvExportController::class, 'cvFourDownload']);
Route::get('/cv-export-five', [CvExportController::class, 'cvFiveDownload']);
Route::get('/cv-export-six', [CvExportController::class, 'cvSixDownload']);
Route::get('/cv-export-seven', [CvExportController::class, 'cvSevenDownload']);