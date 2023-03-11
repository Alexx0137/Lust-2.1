<?php

use App\Http\Controllers\ContactController;
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

Route::view('/', 'index')->name('index');

Route::view('/nosotros', 'about')->name('about');

Route::view('/faq','faqs')->name('faqs');

Route::get('contactanos', [ContactController::class, 'index'])->name('contactanos.index');

Route::post('contactanos', [ContactController::class, 'store'])->name('contactanos.store');
