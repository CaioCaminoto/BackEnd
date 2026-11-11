<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Classe responsável por conversar com o banco de dados => insert, select, update, delete
class Cliente extends Model
{
    protected $table = "clientes"; // Nome da tabela no banco de dados

    // Colunas que podem ser preenchidas em massa (Cliente::create($dados))
    protected $fillable = ["razao_social", "cnpj", "setor", "status"];
}
