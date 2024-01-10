<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\ExercicioController;
use App\Http\Controllers\HoleriteController;
use App\Http\Controllers\DescontoController;
use App\Livewire\Counter;

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

Route::get('/',[HomeController::class,'index'])->name('home.index');

//Rotas de Usuário CRUD
Route::get('/users',[UserController::class,'index'])->name('users.index');
Route::get('/users/create',[UserController::class,'create'])->name('users.create');
Route::post('/users',[UserController::class,'store'])->name('users.store');
Route::get('/users/{user}',[UserController::class,'show'])->name('users.show');
Route::post('/users/{user}/edit',[UserController::class,'edit'])->name('users.edit');
Route::put('/users/{user}',[UserController::class,'update'])->name('users.update');
Route::delete('/users/{user}',[UserController::class,'destroy'])->name('users.destroy');

//Rotas de Funcionarios CRUD
Route::get('/funcionarios',[FuncionarioController::class,'index'])->name('funcionarios.index');
Route::get('/funcionarios/create',[FuncionarioController::class,'create'])->name('funcionarios.create');
Route::post('/funcionarios',[FuncionarioController::class,'store'])->name('funcionarios.store');
Route::get('/funcionarios/{funcionario}',[FuncionarioController::class,'show'])->name('funcionarios.show');
Route::get('/funcionarios/{funcionario}/edit',[FuncionarioController::class,'edit'])->name('funcionarios.edit');
Route::put('/funcionarios/{funcionario}',[FuncionarioController::class,'update'])->name('funcionarios.update');
Route::delete('/funcionarios/{funcionario}',[FuncionarioController::class,'destroy'])->name('funcionarios.destroy');

Route::get('/exercicios',[ExercicioController::class, 'index'])->name('exercicios.index');
Route::post('/exercicios', [ExercicioController::class,'store'])->name('exercicios.store');
Route::get('exercicios/create',[ExercicioController::class, 'create'])->name('exercicios.create');

Route::get('/holerites/create/{funcionario}',[HoleriteController::class, 'create'])->name('holerites.create');
Route::get('/holerites/list/{funcionario}',[HoleriteController::class, 'index'])->name('holerites.index');
Route::get('/holerites/{holerite}',[HoleriteController::class, 'show'])->name('holerites.show');
Route::get('/holerites/desconto/add/{holerite}',[HoleriteController::class, 'descontoAdd'])->name('holerites.descontoAdd');
Route::post('/holerites/desc/{holerite}',[HoleriteController::class, 'descontoStore'])->name('holerites.store.desconto');
Route::post('/holerites/acr/{holerite}',[HoleriteController::class, 'acrescimoStore'])->name('holerites.store.acrescimo');
Route::patch('/holerites/{holerite}',[HoleriteController::class, 'update'])->name('holerites.update');



Route::get('/counter', Counter::class);
