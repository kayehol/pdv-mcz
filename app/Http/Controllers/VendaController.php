<?php

namespace App\Http\Controllers;

use App\Models\Venda;
use App\Models\Cliente;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class VendaController extends Controller
{
    public function index(): View
    {
        try {
            $sales = Venda::all();

            return view('sales', [
                'sales' => $sales
            ]);
        } catch (\Exception $e) {
            var_dump($e->getMessage());
            abort(500);
        }
    }

    // public function show(string $id): View
    // {
    // }
    //
    public function add(): View
    {
        $clients = Cliente::all();
        $products = Produto::all();

        return view('sales.add', [
            'clients' => $clients,
            'products' => $products
        ]);
    }

    // public function store(Request $request): RedirectResponse
    // {
    // }
}
