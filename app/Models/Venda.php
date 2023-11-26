<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Collection;

class Venda extends Model
{
    use HasFactory;
    use HasUuids;
    use SoftDeletes;

    protected $fillable = ['cliente_id','total'];

    public function client(): Cliente {
        return Cliente::where('id', $this->cliente_id)->first();
    }

    public function products(): Collection {
        $productSales = VendaProduto::where('venda_id', $this->id)->get();

        $productsIds = $productSales->map(function ($productSale) {
            return $productSale->produto_id;
        });
        return Produto::whereIn('id', $productsIds)->get();
    }
}
