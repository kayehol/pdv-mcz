<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
                'preco' => floatval($request->price),
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
            $product = Produto::where('id', $id)->first();

            return view('products.details', [
                'product' => $product
            ]);
        } catch (\Exception $e) {
            var_dump($e->getMessage());
            abort(500);
        }
    }

    public function delete(string $id): RedirectResponse
    {
        try {
            $product = Produto::where('id', $id)->first();
            $product->delete();

            return redirect()->route('products');
        } catch (\Exception $e) {
            var_dump($e->getMessage());
            abort(500);
        }
    }

    public function edit(string $id): View
    {
        try {
            $product = Produto::where('id', $id)->first();

            return view('products.edit', [
                'product' => $product
            ]);
        } catch (\Exception $e) {
            var_dump($e->getMessage());
            abort(500);
        }
    }

    public function patch(Request $request, string $id)
    {
        try {
            $product = Produto::where('id', $id)->first();

            $product->descricao = $request->description;
            $product->preco = floatval($request->price);
            $product->gradacao = $request->gradation;
            $product->codigo = $request->code;
            $product->save();

            return view('products.details', [
                'product' => $product
            ]);
        } catch (\Exception $e) {
            var_dump($e->getMessage());
            abort(500);
        }
    }
}
