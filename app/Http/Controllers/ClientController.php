<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Http\Controllers\Controller;
use App\Http\Resources\ClientResource;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    // Função para listar todos os clientes
    public function index()
    {
        $clients = Client::all();
        return ClientResource::collection($clients);
    }

    // Função para exibir um cliente específico
    public function show($id)
    {
        $client = Client::findOrFail($id);
        return new ClientResource($client);
    }

    // Função para criar um novo cliente
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:clients,email',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $client = Client::create($request->all());

        return new ClientResource($client);
    }

    // Função para atualizar um cliente
    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:clients,email,' . $client->id,
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $client->update($request->all());

        return new ClientResource($client);
    }

    // Função para excluir um cliente
    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();

        return response()->json(null, 204);
    }
}