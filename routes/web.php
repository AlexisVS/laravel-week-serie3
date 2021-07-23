<?php

use App\Http\Controllers\BackOfficeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioComponentController;
use App\Http\Controllers\ServicesComponentController;
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

Route::get('/', [HomeController::class, "index"]);

Route::get('/laRoute', function () {
    return view('pages.laRoute');
})->name("lalaRoute");


/* -------------------------------------------------------------------------- */
/*                                    Admin                                   */
/* -------------------------------------------------------------------------- */

Route::get('/administration', [BackOfficeController::class, "index"]);

Route::get('/administration/services', [ServicesComponentController::class, 'index']);
Route::get('/administration/portfolio', [PortfolioComponentController::class, 'index']);
