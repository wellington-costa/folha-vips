<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Holerite;

class DescontoController extends Controller
{

    public readonly DescontoController $desconto;
    public function __construct()
    {
        $this->desconto = new DescontoController();
    }

    public function create(){
        //$holerite = Holerite::find($id);
        return view('welcome');
    }
    public function store(Request $request, string $id){
        $holerite = Holerite::find($id);

        $holerite->descontos()->create([
            'description' => $request->description,
            'valor' => $request->valor
        ]);
    }

}
