<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
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

Route::get('/', [App\Http\Controllers\Principal::class, 'index'])->name('principal');
Route::get('/Sobre', [App\Http\Controllers\Principal::class, 'sobre'])->name('sobre');
Route::get('/Contato', [App\Http\Controllers\Principal::class, 'contato'])->name('contato');
Route::get('/Cursos', [App\Http\Controllers\Principal::class, 'cursos'])->name('cursos');
Route::get('/Desenvolvimento-Sistemas', [App\Http\Controllers\Principal::class, 'ds'])->name('ds');
Route::get('/Administracao', [App\Http\Controllers\Principal::class, 'adm'])->name('adm');
Route::get('/Meio-Ambiente', [App\Http\Controllers\Principal::class, 'ma'])->name('ma');
Route::get('/Mecatronica', [App\Http\Controllers\Principal::class, 'meca'])->name('meca');