<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Exception;
use Illuminate\View\View;

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

    public function store(Request $request): View
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
            $clients = Cliente::all();

            return view('clients', [
                'clients' => $clients
            ]);
        } catch (Exception $e) {
            var_dump($e->getMessage());
            abort(500);
        }
    }

    public function add(): View
    {
        return view('clients.add');
    }
}
