<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all(); // recupera todos os clientes do banco de dados
        return view('clientes.index', compact('clientes'));
    }


    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required',
            'num_carta_conducao' => 'required',
            'telemovel' => 'required',
            'email' => 'required'

        ]);

        // Criação do novo cliente
        $cliente = new Cliente;
        $cliente->nome = $request->nome;
        $cliente->num_carta_conducao = $request->num_carta_conducao;
        $cliente->telemovel = $request->telemovel;
        $cliente->email = $request->email;
        $cliente->save();

        // Redirecionar para a página de listagem de clientes apos a conclusao do preenchimento
        return redirect()->route('clientes.index');
    }


}
