<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class VendaProduto extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'vendas_produtos';
    protected $fillable = ['venda_id', 'produto_id', 'qtd'];
    public $timestamps = false;
}
