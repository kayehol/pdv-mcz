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

    public function store(Request $request): RedirectResponse | View
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'cep' => 'required|size:8',
            'city' => 'required',
            'state' => 'required|size:2',
            'cpnj' => 'size:14',
            'cpf' => 'size:11',
        ]);

        if ($validated) {
            Cliente::create([
                'nome' => $request->name,
                'email' => $request->email,
                'fone' => $request->phone,
                'endereco' => $request->address,
                'cep' => $request->cep,
                'cidade' => $request->city,
                'estado' => $request->state,
                'cnpj' => $request->cnpj,
                'cpf' => $request->cpf
            ]);
        }

        return redirect()->route('clients');
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
