<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AreaController;
use App\Http\Controllers\Admin\PuestoController;
use App\Http\Controllers\Admin\SedeController;

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

Route::get('/test', function () {
    return view('test');
});
Route::get('/bienvenida', function () {
    return view('bienvenida');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth','admin'])->name('admin.')->prefix('admin')->group(function (){
    Route::get('/',[AdminController::class,'index'])->name('index');
    Route::resource('/puestos',PuestoController::class);
    Route::resource('/sedes',SedeController::class);
    Route::resource('/areas',AreaController::class);

});
require __DIR__.'/auth.php';
