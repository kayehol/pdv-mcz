<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Cliente;
use App\Models\Produto;

class NewSale extends Component
{
    public string $selectedClientId;
    public ?Cliente $client;
    public string $selectedProductId = '';
    public array $selectedProducts = [];
    public float $subtotal = 0.0;
    public float $total = 0.0;

    public function render()
    {
        return view('livewire.new-sale')->with([
            'clients' => Cliente::all(),
            'products' => Produto::all(),
        ]);
    }

    public function updating($property, $value)
    {
        try {
            if ($property === 'selectedClientId') {
                $this->client = Cliente::where('id', $value)->first();
            }
        } catch (\Exception $e) {
            var_dump($e->getMessage());
            abort(500);
        }
    }

    public function add()
    {
        try {
            $product = Produto::where('id', $this->selectedProductId)->first();

            if (!$product) throw new \Exception('No product!');

            array_push($this->selectedProducts, $product);

            $this->subtotal += $product->preco;
            $this->total += $product->preco;
        } catch (\Exception $e) {
            dd($e);
            var_dump($e->getMessage());
            abort(500);
        }
    }

    public function remove(int $key)
    {
        if (array_key_exists($key, $this->selectedProducts)) {
            $this->subtotal -= $this->selectedProducts[$key]->preco;
            $this->total -= $this->selectedProducts[$key]->preco;

            unset($this->selectedProducts[$key]);
        }
    }
}
