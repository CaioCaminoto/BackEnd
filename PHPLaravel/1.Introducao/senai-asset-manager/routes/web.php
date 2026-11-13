<?php
declare(strict_types=1);

use App\Http\Controllers\AtivoController;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

Route::get("/", [AtivoController::class, "index"])->name("ativos.index");

//rota de Infrastrutura json
Route::get("/status", [AtivoController::class, "status"])->name("ativos.status");


//Criar as rotas nomeadas para Clientes -> para filtro por setor
Route::get("/clientes/setor/{setor?}",
[ClienteController::class, "filtrarPorSetor"])
    ->name("clientes.setor");

//Rota RESTful (GET, POST, PUT/PATCH, DELETE)
Route::resource("clientes", ClienteController::class)->whereNumber("cliente");