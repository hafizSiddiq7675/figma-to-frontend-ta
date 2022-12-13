<?php
// routes/web.php
use Illuminate\Http\Request;
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
    
Route::get('/cv-one', function () {
    return view('cv.index-one');
});
Route::get('/cv-two', function () {
    return view('cv.index-second');
});
Route::get('/cv-three', function () {
    return view('cv.index-third');
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
Route::get('/cv-ten', function () {
    return view('cv.index-ten-cv');
});
Route::get('/cv-eleven', function () {
    return view('cv.index-eleven-cv');
});

Route::get('/Crypto', function () {
    return view('crypto.index');
});
Route::get('/C', function () {
    return view('crypto.index2');
});
Route::get('/helloreact', function () {
    return view('index');
});

Route::post('count', function (Request $request) {
    return response()->json([
        'message' => $request->message,
    ]);
});
Route::get('/ninth-template', function () {
    return view('nine-template');
});

Route::get('/portfolio-template', function() {
    return view('template.portfolio');
});
Route::get('/portfolio-dumb', function() {
    return view('template.portfolio-dumb');
});