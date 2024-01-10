@include('components.header')
@php
    $voltar = route('holerites.index',['funcionario' => $funcionario->id])
@endphp


<body>
    @include('components.navbar')

    <section>
        <main>

            <div class="card">
                <div class="card-header">
                  <h1 class="text-primary">Folha de {{$holerite->description}}</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <h3 class="form-title"><b>{{$funcionario->nome}} </b></h3>

                        </div>
                    </div>
                    <div class="row">

                        <div class="col-4">
                            <h6 class="form-title">Salário Base: </h6>
                            <input class="form-control text-success" type="text" name="salarioBase" id="salarioBase" value="{{$funcionario->salarioBase}} " @disabled(true)>
                        </div>


                        <div class="col-4">
                            <h6 class="form-title">Periculosidade: </h6>
                            <input class="form-control text-success" type="text" name="periculosidade" id="periculosidade" value="{{$funcionario->periculosidade}}" @disabled(true)>
                        </div>
                    </div>

                    <br />
                    <div class="row">

                        <div class="col-4">
                            <h6 class="form-title">INSS: </h6>
                            <input class="form-control text-danger" type="text" name="inss" id="inss" value="{{$funcionario->inss}}" @disabled(true)>
                        </div>

                        <div class="col-4">
                            <h6 class="form-title">Salário Família: </h6>
                            <input class="form-control text-success" type="text" name="salarioFamilia" id="salarioFamilia" value="{{$funcionario->salarioFamilia}}"  @disabled(true)>
                        </div>


                    </div>
                    <br />
                    <div class="row">

                        @php

                            $descontos = $holerite->descontos()->where('holerite_id',$holerite->id)->get();
                            $acrescimos = $holerite->adicionais()->where('holerite_id',$holerite->id)->get();
                            $totalDescontos = 0;
                            $totalAdicionais = 0;
                            foreach ($descontos as $desconto) {
                                $totalDescontos = $desconto->valor + $totalDescontos;
                            }
                            foreach ($acrescimos as $acrescimo) {
                                $totalAdicionais = $acrescimo->valor + $totalAdicionais;
                            }


                        @endphp

                        <div class="col-4">
                            <h6 class="form-title">Descontos: </h6>
                            <input class="form-control text-danger" type="text" name="desconto" id="desconto" value="{{$totalDescontos}}" @disabled(true)>
                        </div>

                        <div class="col-4">
                            <h6 class="form-title">Acréscimos: </h6>
                            <input class="form-control text-success" type="text" name="acrescimo" id="acrescimo" value="{{$totalAdicionais}}"  @disabled(true)>
                        </div>



                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-4">
                           <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#descontoModal">+desconto</button>

                        </div>
                        <div class="col-4">
                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#acrescimoModal">+acréscimo</button>
                        </div>

                    </div>

                    <br/>
                    <br/>
                    <br/>
                   <form method="post" action={{route('holerites.update',['holerite'=>$holerite->id])}}>
                    @csrf
                    <input type="hidden" value="PATCH" name="_method">
                    <div class="row">
                        <div class="col-4">
                            <h6 class="form-title">Valor Total: </h6>
                            <input class="form-control" type="text" name="valorTotal" id="valorTotal" value="" @disabled(true)>
                        </div>
                    </div>
                    <br/>
                    <br/>
                    <div class="row">
                        <div class="col-4">
                            <a href="" class="btn btn-primary">Fechar Folha</a>
                        </div>
                    </div>
                   </form>
                </div>
            </div>
            <!-- Modal Desconto -->
                <div class="modal fade" id="descontoModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header card-header">
                                <h3 class="modal-title fs-5 text-danger">Desconto</h3>
                                <button type="button" class="close btn btn-danger" data-bs-dismiss="modal" aria-label="Close">x</button>
                            </div>
                            <div class="modal-body card-body">
                                <form  action={{route('holerites.store.desconto',['holerite'=>$holerite->id])}} method="POST" enctype="multipart/form-data">
                                    @csrf
                                        <div class="row">

                                            <div class="col-8">
                                                <label class="fom-control">Descrição</label>
                                                <input type="text" class="form-control text-danger" name="description" id="description" placeholder="descrição" required>
                                            </div>


                                            <div class="col-4">
                                                <label class="fom-control">Valor:</label>
                                                <input type="number" class="form-control" name="valor" id="valor" >
                                            </div>
                                        </div>
                                        <div class="col-12 mt-5">
                                            <button type="submit" class="btn btn-primary">CADASTRAR</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

             <!-- Modal Acrescimo-->
                <div class="modal fade" id="acrescimoModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header card-header">
                                <h3 class="modal-title fs-5 text-success">Acréscimo</h3>
                                <button type="button" class="close btn btn-danger" data-bs-dismiss="modal" aria-label="Close">x</button>
                            </div>
                            <div class="modal-body card-body">
                                <form  action={{route('holerites.store.acrescimo',['holerite'=>$holerite->id])}} method="POST" enctype="multipart/form-data">
                                    @csrf
                                        <div class="row">

                                            <div class="col-8">
                                                <label class="fom-control">Descrição</label>
                                                <input type="text" class="form-control text-success" name="description" id="description" placeholder="descrição" required>
                                            </div>


                                            <div class="col-4">
                                                <label class="fom-control">Valor:</label>
                                                <input type="number" class="form-control" name="valor" id="valor" >
                                            </div>
                                        </div>
                                        <div class="col-12 mt-5">
                                            <button type="submit" class="btn btn-primary">CADASTRAR</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



           <script>
                    let salarioBase = document.getElementById('salarioBase');
                    let inss = document.getElementById('inss');
                    let salarioFamilia = document.getElementById('salarioFamilia');
                    let periculosidade = document.getElementById('periculosidade');
                    let valorTotal = document.getElementById('valorTotal');
                    let desconto = document.getElementById('desconto');
                    let acrescimo = document.getElementById('acrescimo');



                    let vt = somarValorTotal(salarioBase.value, inss.value);

                    console.log(valorTotal.value);

                    if (salarioFamilia.value) {
                        vt = vt + parseFloat(salarioFamilia.value);
                    }
                    if(periculosidade.value){
                        vt = vt + parseFloat(periculosidade.value);
                    }
                    if(desconto.value){
                        vt = vt - parseFloat(desconto.value);
                    }
                    if(acrescimo.value){
                        vt = vt + parseFloat(acrescimo.value);
                    }

                    salarioBase.value = formatarValor(salarioBase.value);
                    inss.value = formatarValor(inss.value);
                    salarioFamilia.value = formatarValor(salarioFamilia.value);
                    periculosidade.value = formatarValor(periculosidade.value);
                    desconto.value = formatarValor(desconto.value);
                    acrescimo.value = formatarValor(acrescimo.value);
                    valorTotal.value = formatarValor(vt);





                    function somarValorTotal(salarioBase, inss,){

                        let salarioLiquido = parseFloat(salarioBase)-parseFloat(inss);


                         return (salarioLiquido);



                    }


                    function formatarValor(valor) {
                      return new Intl.NumberFormat('pt-BR', { style:'currency', currency:'BRL'}).format(valor);
                    }

           </script>
        </main>
    </section>


    @include('components.backPainel')
    @include('components.footer')
</body>

</html>
