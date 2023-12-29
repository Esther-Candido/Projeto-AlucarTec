<?php

namespace App\Http\Controllers;

use App\Models\Aluguel;
use App\Models\Carro;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    /**
     * recupera todos os carros do banco de dados
     */

    public function index()
    {
        $carros = Carro::all();
        return view('carros.index', compact('carros'));
    }


    /**
     * cria os carros no banco de dados
     */
    public function create()
    {
        return view('carros.create');
    }

    /**
     * Criação do novo carro
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'modelo' => 'required',
            'marca' => 'required',
            'ano' => 'required|numeric',
        ]);

        //Criação do novo carro
        $carro = new Carro;
        $carro->modelo = $request->modelo;
        $carro->marca = $request->marca;
        $carro->ano = $request->ano;
        $carro->matricula = $request->matricula;
        $carro->save();

        // Redirecionar para a página de listagem de carros
        return redirect()->route('carros.index');
    }




    /*
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Carro $carro)
    {
        //
    }


    public function edit(Carro $carro)
    {
        //
    }


    public function update(Request $request, Carro $carro)
    {
        //
    }


    public function destroy(Carro $carro)
    {
        //
    }
*/

}

