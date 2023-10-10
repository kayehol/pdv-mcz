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
            dd($e->getMessage());
        }
    }

    public function store(Request $request): Cliente
    {
        try {
            $client = Cliente::create([
                'nome' => $request->name,
                'fone' => $request->phone,
                'endereco' => $request->address,
                'cep' => $request->cep,
                'cidade' => $request->cidade,
                'estado' => $request->estado,
                'cnpj' => $request->cnpj,
                'cpf' => $request->cpf
            ]);

            return $client;
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
