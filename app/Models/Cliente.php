<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Cliente extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = ['nome', 'fone', 'endereco', 'cep', 'cidade', 'estado', 'cnpj', 'cpf'];
}
