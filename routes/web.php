<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\NumeroController;

Route::get('/numeros', [NumeroController::class, 'index']); // Para obtener todos los números
Route::post('/numeros', [NumeroController::class, 'store']); // Para añadir un nuevo número
