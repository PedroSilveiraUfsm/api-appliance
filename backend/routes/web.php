<?php

use App\Http\Controllers\ApplianceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|s
*/

Route::get('/', function () {
    return '🚀 Backend Started! Api-Appliance';
});

Route::get('appliances', [ApplianceController::class, 'index'])->name('appliances.index');
Route::get('appliances/create', [ApplianceController::class, 'create'])->name('appliances.create');
Route::get('appliances/{id}', [ApplianceController::class, 'show'])->name('appliances.show');
Route::get('appliances/{id}/edit', [ApplianceController::class, 'edit'])->name('appliances.edit');
Route::get('appliances/{id}/delete', [ApplianceController::class, 'destroy'])->name('appliances.destroy');

