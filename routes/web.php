<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FullcalendarController;
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
//fullcalendar
Route::get('fullcalendar', [FullcalendarController::class, 'index']);
Route::post('fullcalendarAjax', [FullcalendarController::class, 'ajax']);