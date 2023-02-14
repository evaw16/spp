<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassController;
// use App\Http\Controllers\StudentController;

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false
]);
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
Route::get('/formsiswa', function () {
    return view('formsiswa');
});
// Route::get('/formkelas', function () {
//     return view('formkelas');
// });
// Route::resource('/student', StudentController::class)->except('destroy');
// Route::delete('/student/{id?}', [StudentController::class, 'destroy'])->name('student.destroy');
Route::group(['middleware' => ['auth']], function () {
Route::resource('/classes', ClassController::class)->except('destroy');
Route::delete('/classes/{id?}', [ClassController::class, 'destroy'])->name('classes.destroy');
});