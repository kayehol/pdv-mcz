<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Cliente;
use App\Models\Produto;
use App\Models\Venda;
use App\Models\VendaProduto;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class NewSale extends Component
{
    public ?Cliente $client;

    public string $selectedClientId;
    public string $selectedProductId = '';
    public array $selectedProducts = [];
    public array $currentProductsQty = [];

    public float $subtotal = 0.0;
    public float $total = 0.0;

    public function render(): View
    {
        return view('livewire.new-sale')->with([
            'clients' => Cliente::all(),
            'products' => Produto::all(),
        ]);
    }

    public function updating($property, $value): void
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

    public function add(): void
    {
        try {
            $product = Produto::where('id', $this->selectedProductId)->first();

            if (!$product) throw new \Exception('No product!');

            array_push($this->selectedProducts, $product);
        } catch (\Exception $e) {
            dd($e);
            var_dump($e->getMessage());
            abort(500);
        }
    }

    public function remove(float $price, int $key): void
    {
        if (array_key_exists($key, $this->selectedProducts)) {
            if (array_key_exists($key, $this->currentProductsQty)) {
                $currentProductQty = $this->currentProductsQty[$key] ? $this->currentProductsQty[$key] : 1;

                $this->subtotal -= $price * $currentProductQty;
                $this->total -= $price * $currentProductQty;
            }

            unset($this->selectedProducts[$key]);
        }
    }

    public function addToSale(float $price, int $key): void
    {
        if (array_key_exists($key, $this->currentProductsQty)) {
            $currentProductQty = $this->currentProductsQty[$key] ? $this->currentProductsQty[$key] : 1;

            $this->subtotal += $price * $currentProductQty;
            $this->total += $price * $currentProductQty;
        }
    }

    public function storeSale(): View
    {
        try {
            DB::beginTransaction();

            $sale = Venda::create([
                'cliente_id' => $this->selectedClientId,
                'total' => $this->total,
            ]);

            if ($sale) {
                foreach($this->selectedProducts as $key => $product) {
                    VendaProduto::create([
                        'venda_id' => $sale->id,
                        'produto_id' => $product->id,
                        'qtd' => $this->currentProductsQty[$key] // ?
                    ]);
                }
                DB::commit();
            }
            return view('sales')->with([
                'sales' => Venda::all()
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
            abort(500);
        }
    }
}
