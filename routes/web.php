<?php

use App\Http\Controllers\Projetos_Controller;
use App\Http\Controllers\Entregas_Controller;
use App\Http\Controllers\Medicoes_Controller;
use App\Http\Controllers\Atividades_Controller;
use App\Http\Controllers\Home_controller;
use App\Http\Controllers\Usuario_Controller;
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

# Rotas de Usuario | Login
    Route::get('/',[Usuario_Controller::class, 'index']);

# Home
    #http://localhost:3000/
    #Route::get('/','http://localhost:3000/');
    Route::post('/home',[Home_controller::class, 'index']);

# Rotas de Projetos
    
    #Route::get('/',[Projetos_Controller::class, 'index']);
    Route::post('/projetos',[Projetos_Controller::class, 'index']);
    Route::post('/projetos-new',[Projetos_Controller::class, 'create']);
    Route::post('/projetos-store',[Projetos_Controller::class, 'store']);
    Route::post('/projetos-delete',[Projetos_Controller::class, 'delele_row']);
    Route::post('/projetos-edit',[Projetos_Controller::class, 'edit_row']);
    Route::post('/projetos-update',[Projetos_Controller::class, 'update_row']);

# Rotas de Medições
    Route::post('/medicoes',[Medicoes_Controller::class, 'index']);
    Route::post('/medicoes-new',[Medicoes_Controller::class, 'create']);
    Route::post('/medicoes-store',[Medicoes_Controller::class, 'store']);
    Route::post('/medicoes-delete',[Medicoes_Controller::class, 'delele_row']);
    Route::post('/medicoes-edit',[Medicoes_Controller::class, 'edit_row']);
    Route::post('/medicoes-update',[Medicoes_Controller::class, 'update_row']);

# -- Rotas de Entregas
    Route::post('/entregas',[Entregas_Controller::class, 'index']);
    Route::post('/entregas-new',[Entregas_Controller::class, 'create']);
    Route::post('/entregas-store',[Entregas_Controller::class, 'store']);
    Route::post('/entregas-delete',[Entregas_Controller::class, 'delele_row']);
    Route::post('/entregas-edit',[Entregas_Controller::class, 'edit_row']);
    Route::post('/entregas-update',[Entregas_Controller::class, 'update_row']);

# Rotas de Atividades
    Route::post('/atividades',[Atividades_Controller::class, 'index']);
    Route::post('/atividades-new',[Atividades_Controller::class, 'create']);
    Route::post('/atividades-store',[Atividades_Controller::class, 'store']);
    Route::post('/atividades-delete',[Atividades_Controller::class, 'delele_row']);
    Route::post('/atividades-edit',[Atividades_Controller::class, 'edit_row']);
    Route::post('/atividades-update',[Atividades_Controller::class, 'update_row']);