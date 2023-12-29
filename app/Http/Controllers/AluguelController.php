<?php

namespace App\Http\Controllers;

use App\Models\Aluguel;
use App\Models\Carro;
use Illuminate\Http\Request;

class AluguelController extends Controller
{

    public function index()  //mostra uma lista do recurso (INDEX)
    {
        $aluguel = Aluguel::with('carro', 'cliente')->get();// pega o relacionamento de carro e clientes BD
        return view('aluguel.index', compact('aluguel'));
    }




    /*
    public function create() // mostra um formulário para criar um novo recurso (CREATE)
    {
        return view('aluguel.create');
    }

    public function show(Aluguel $aluguel) // exibe os detalhes de um recurso específico (SHOW)
    {
        return view('aluguel.show', compact('aluguel'));
    }

    public function edit(Aluguel $aluguel) // mostra o formulário para edição (EDIT)
    {
        return view('aluguel.edit', compact('aluguel'));
    }

    public function update(Request $request, Aluguel $aluguel) // atualiza o recurso específico (UPDATE)
    {
        $aluguel->update($request->all());
        return redirect()->route('aluguel.index');
    }

    public function destroy(Aluguel $aluguel) // remove o recurso específico (DESTROY)
    {
        $aluguel->delete();
        return redirect()->route('aluguel.index');
    }*/








}
