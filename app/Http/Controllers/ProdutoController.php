<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Produto;
use Exception;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ProdutoController extends Controller
{
    public function index(): View
    {
        try {
            $products = Produto::all();

            return view('products', [
                'products' => $products
            ]);
        } catch (Exception $e) {
            var_dump($e->getMessage());
            abort(500);
        }
    }

    public function store(Request $request): RedirectResponse
    {
        try {
            Produto::create([
                'descricao' => $request->description,
                'preco' => $request->price,
                'gradacao' => $request->gradation,
                'codigo' => $request->code,
            ]);

            return redirect()->route('products');
        } catch (Exception $e) {
            var_dump($e->getMessage());
            abort(500);
        }
    }

    public function add(): View
    {
        return view('products.add');
    }

    public function show(string $id): View
    {
        try {
            $client = Cliente::where('id', $id)->first();

            return view('clients.details', [
                'client' => $client
            ]);
        } catch (\Exception $e) {
            var_dump($e->getMessage());
            abort(500);
        }
    }

    public function delete(string $id): RedirectResponse
    {
        try {
            $client = Cliente::where('id', $id)->first();
            $client->delete();

            return redirect()->route('clients');
        } catch (\Exception $e) {
            var_dump($e->getMessage());
            abort(500);
        }
    }

    public function edit(string $id): View
    {
        try {
            $client = Cliente::where('id', $id)->first();

            return view('clients.edit', [
                'client' => $client
            ]);
        } catch (\Exception $e) {
            var_dump($e->getMessage());
            abort(500);
        }
    }

    public function patch(Request $request, string $id)
    {
        try {
            $client = Cliente::where('id', $id)->first();

            $client->nome = $request->name;
            $client->fone = $request->phone;
            $client->endereco = $request->address;
            $client->cep = $request->cep;
            $client->cidade = $request->city;
            $client->estado = $request->state;
            $client->cnpj = $request->cnpj;
            $client->cpf = $request->cpf;
            $client->save();

            return view('clients.details', [
                'client' => $client
            ]);
        } catch (\Exception $e) {
            var_dump($e->getMessage());
            abort(500);
        }
    }
}
