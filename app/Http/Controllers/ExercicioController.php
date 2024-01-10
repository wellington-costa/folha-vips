<?php

namespace App\Http\Controllers;

use App\Models\Exercicio;
use Illuminate\Http\Request;

class ExercicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public readonly Exercicio $exercicio;
    public function __construct()
    {
        $this->exercicio = new Exercicio();
    }

    public function index()
    {
        return view('exercicios/list-exercicios');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('exercicios/add-exercicio');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $exercicioAtual = $this->exercicio->all()->last();
        if ($exercicioAtual) {
            $exercicioAtual->update(['atual' => "false"]);
        }

        $exercicioNovo = $this->exercicio->create([
            'nome' => $request->input('nome'),

        ]);
        //dd($exercicioAtual, $exercicioNovo);

        if ($exercicioNovo) {
            $exercicioNovo->meses()->create(['nome' => 'Janeiro']);
            $exercicioNovo->meses()->create(['nome' => 'Fevereiro']);
            $exercicioNovo->meses()->create(['nome' => 'Março']);
            $exercicioNovo->meses()->create(['nome' => 'Abril']);
            $exercicioNovo->meses()->create(['nome' => 'Maio']);
            $exercicioNovo->meses()->create(['nome' => 'Junho']);
            $exercicioNovo->meses()->create(['nome' => 'Julho']);
            $exercicioNovo->meses()->create(['nome' => 'Agosto']);
            $exercicioNovo->meses()->create(['nome' => 'Setembro']);
            $exercicioNovo->meses()->create(['nome' => 'Outubro']);
            $exercicioNovo->meses()->create(['nome' => 'Novembro']);
            $exercicioNovo->meses()->create(['nome' => 'Dezembro']);


            return redirect()->route('home.index')->with('msg', 'Exercicio Cadastrado com sucesso');

        }


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
