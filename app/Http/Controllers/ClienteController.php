<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Exception;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ClienteController extends Controller
{
    public function index(): View
    {
        try {
            $clients = Cliente::all();

            return view('clients', [
                'clients' => $clients
            ]);
        } catch (Exception $e) {
            var_dump($e->getMessage());
            abort(500);
        }
    }

    public function store(Request $request): RedirectResponse
    {
        try {
            Cliente::create([
                'nome' => $request->name,
                'fone' => $request->phone,
                'endereco' => $request->address,
                'cep' => $request->cep,
                'cidade' => $request->city,
                'estado' => $request->state,
                'cnpj' => $request->cnpj,
                'cpf' => $request->cpf
            ]);

            return redirect()->route('clients');
        } catch (Exception $e) {
            var_dump($e->getMessage());
            abort(500);
        }
    }

    public function add(): View
    {
        return view('clients.add');
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
            dd($e);
            var_dump($e->getMessage());
            abort(500);
        }
    }
}
