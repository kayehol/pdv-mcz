<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Cliente;
use App\Models\Produto;

class NewSale extends Component
{
    public string $selectedClient = "";
    private array $products = [];

    public function render()
    {
        return view('livewire.new-sale')->with([
            'clients' => Cliente::all(),
            'products' => Produto::all()
        ]);
    }
}
