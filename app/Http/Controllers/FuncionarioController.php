<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;
use App\Models\Holerite;
use Illuminate\Support\Carbon;

class FuncionarioController extends Controller
{
    public readonly Funcionario $funcionario;
    public function __construct()
    {
        $this->funcionario = new Funcionario();
    }
    public function index()
    {
        $funcionarios = $this->funcionario->all();

        //$funcionarios = [
        //  'id_funcionario' => $this->funcionario->id_funcionario,
        //  'nome' => $this->funcionario->nome,
        //  'cargo' => $this->funcionario->cargo,
        //  'dataAdmissio' => Carbon::parse($this->funcionario->dataAdmissao)->format('d-m-Y')
        //];


        //$dataAdmissao = Carbon::parse($this->funcionario->dataAdmissao)->format('d-m-Y');
        //$funcionarios['dataDeAdmissao'] = $dataAdmissao;
        //var_dump($funcionarios);
        return view('funcionarios/list-funcionarios',['funcionarios' => $funcionarios]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('funcionarios/add-funcionario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $path = $request->foto->store('funcionarios');
        //$data = Carbon::parse($request->dataAdmissao)->format('d-m-Y');

        //var_dump($request->except(['_token']));
        $created = $this->funcionario->create([
            'nome' => $request->input('nome'),
            'rg' => $request->input('rg'),
            'cpf' => $request->input('cpf'),
            'telefone' => $request->input('telefone'),
            'email' => $request->input('email'),
            'chavePix' => $request->input('chavePix'),
            'pis' => $request->input('pis'),
            'estadoCivil' => $request->input('estadoCivil'),
            'qtdDependentes' => $request->input('qtdDependentes'),
            'cep' => $request->input('cep'),
            'rua' => $request->input('rua'),
            'numero' => $request->input('numero'),
            'bairro' => $request->input('bairro'),
            'cidade' => $request->input('cidade'),
            'estado' => $request->input('estado'),
            'pais' => $request->input('pais'),
            'cargo' => $request->input('cargo'),
            'departamento' => $request->input('departamento'),
            'dataAdmissao' => $request->input('dataAdmissao'),
            'salarioBase' => $request->input('salarioBase'),
            'salarioPericulosidade' => $request->input('salarioPericulosidade'),
            'foto' => $path,
            'inss' => $request->input('inss'),
            'salarioFamilia' => $request->input('salarioFamilia')


        ]);

        if($created){
            return redirect()->back()->with('success','Funcionario Cadastrado!');
        }

        //$data = $request->all();

        //if($request->foto){
            //$data['foto'] = $request->foto->store('funcionarios');
        //}
        //$this->funcionario->save($data);

        return redirect()->back()->with('message','Error');


    }

    /**
     * Display the specified resource.
     */
    public function show(Funcionario $funcionario)
    {
        $holerites = Holerite::where('funcionario_id',$funcionario->id)->first();
        //dd($holerites);

        return view('funcionarios/show-funcionario', ['funcionario' => $funcionario], ['holerites'=>$holerites]);
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
