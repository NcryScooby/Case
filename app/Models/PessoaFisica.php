<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PessoaFisica extends Model
{
    protected $table = "pessoa_fisica";
    protected $primaryKey = "id";
    protected $fillable = ["nome", "sobrenome", "cpf", "data_nascimento"];
    use HasFactory;
}
