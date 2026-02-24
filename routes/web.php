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

Route::get('/', [App\Http\Controllers\Principal::class, 'principal']);

Route::get('/mencao', [App\Http\Controllers\Professor::class, 'mencao']);
Route::get('/boletim', [App\Http\Controllers\Aluno::class, 'boletim']);
Route::get('/login', [App\Http\Controllers\Aluno::class, 'login']);
Route::get('/logout', [App\Http\Controllers\Aluno::class, 'logout']);
Route::get('/frequencia', [App\Http\Controllers\Aluno::class, 'frequencia']);
Route::get('/login', [App\Http\Controllers\Professor::class, 'login']);
Route::get('/logout', [App\Http\Controllers\Professor::class, 'logout']);
Route::get('/rematricula', [App\Http\Controllers\ALuno::class, 'rematricula']);
Route::get('/alunos', [App\Http\Controllers\Professor::class, 'alunos']);
Route::get('/consultar-mencao', [App\Http\Controllers\ALuno::class, 'consultar-mencao']);




