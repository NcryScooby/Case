<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PessoaJuridica extends Model
{
    protected $table = "pessoa_juridica";
    protected $primaryKey = "id";
    protected $fillable = ["nome", "nome_fantasia", "cnpj"];
    use HasFactory;
}
