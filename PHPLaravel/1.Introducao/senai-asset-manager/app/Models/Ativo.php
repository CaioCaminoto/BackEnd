<?php
declare(strict_types=1);


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//Modelo representativo de um Ativo Fabril
final class Ativo extends Model
{
    use HasFactory; // Trait para habilui

    protected $table = "ativos"; // Nome da tabela no banco de dados 

    // Atributos da tabela de ativos (colunas) ()
    protected $fillable = [
        "codigo_patrimonio",
        "nome",
        "setor",
        "status",
        "tensao_operacao",
        "horas_trabalhadas"
    ];
}
