<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Request;

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

Auth::routes(['verify' => true]);
/*Dropdown*/
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/parkinglot', [App\Http\Controllers\HomeController::class, 'parkinglot'])->name('parkinglot');

/*Navbar*/
    Route::get('/informations', [App\Http\Controllers\Controller::class, 'informations'])->name('informations');
    Route::get('/documentary', [App\Http\Controllers\Controller::class, 'documentary'])->name('documentary');
    Route::get('/quiz', [App\Http\Controllers\Controller::class, 'quiz'])->name('quiz');
    Route::get('/copyright', [App\Http\Controllers\Controller::class, 'copyright'])->name('copyright');


// Route::put('/themes', function(Request $request) {
//     $request->validate([
//        'theme' => ['required', Rule::in(['darkly', 'cerulean'])]
//     ]);

//     session(['theme' => $request->theme]);
//     return back();
//  })->name('themes.update');
