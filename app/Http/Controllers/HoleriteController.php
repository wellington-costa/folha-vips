<?php

namespace App\Http\Controllers;

use App\Models\Adicional;
use App\Models\Exercicio;
use App\Models\Holerite;
use Illuminate\Http\Request;
use App\Models\Funcionario;
use App\Models\Mes;
use App\Models\Desconto;

class HoleriteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public readonly Holerite $holerite;
    public function __construct()
    {
        $this->holerite = new Holerite();
    }

    public function index(string $funcionario_id)
    {
           $holerites = $this->holerite->where('funcionario_id', $funcionario_id)->get();

           return view('holerites/list-holerites', ['holerites' => $holerites]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $funcionario_id)
    {
        $funcionario = Funcionario::find($funcionario_id);

        $exercicio = Exercicio::all()->last();

        $meses = Mes::where('exercicio_id',$exercicio->id)->get();



        foreach($meses as $mes){
            $holerite = new Holerite();
            $holerite->description = $mes->nome;
            $holerite->mes_id = $mes->id;
            $holerite->funcionario_id = $funcionario->id;
            $holerite->save();
        }

        $holerites = $funcionario->holerites()->where('funcionario_id',$funcionario->id)->first();


       return view('funcionarios/show-funcionario', ['funcionario' => $funcionario], ['holerites' => $holerites]);


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Holerite $holerite)
    {
        $funcionario = Funcionario::find($holerite->funcionario_id);


       return view('holerites/show-holerite', ['holerite' => $holerite], ['funcionario'=> $funcionario]);
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
        $holerite = $this->holerite->find($id);

        $holerite->update($request->only(['valorTotal']));

        return redirect()->route('holerites.index',['funcionario'=>$holerite->funcionario_id])->with('msg','Folha fechada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function acrescimoStore(Request $request, string $id){
        $holerited = $this->holerite->find($id);
        $holerited->adicionais()->create([

            'description' =>$request->input('description'),
            'valor' =>$request->input('valor')
        ]);


        return redirect()->back()->with('msg','Acréscimo cadastrado!');

    }

    public function descontoStore(Request $request, string $id){
        $holerited = $this->holerite->find($id);
        $holerited->descontos()->create([

            'description' =>$request->input('description'),
            'valor' =>$request->input('valor')
        ]);


        return redirect()->back()->with('msg','Desconto cadastrado!');

    }

    public function addValor(Request $request, string $id){


    }
}
