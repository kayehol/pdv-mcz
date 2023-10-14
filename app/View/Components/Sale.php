<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Cliente;

class Sale extends Component
{
    public string $selected;
    /**
     * Create a new component instance.
     */
    public function __construct(public Cliente $client, public array $products)
    {
        $this->client = $client;
        $this->products = $products;
    }

    public function isSelected(string $option): bool
    {
        return $option === $this->selected;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sale');
    }
}
