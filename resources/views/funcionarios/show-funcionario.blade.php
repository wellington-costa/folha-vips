    @include('components.header')
    @php
        $voltar = route('funcionarios.index')
    @endphp


    <body>
        @include('components.navbar')

        <section>
            <main>
                <div class="card">
                    <div class="card-header">
                      <h1 class="text-primary">{{$funcionario->nome}}</h1>
                    </div>
                    <div class="card-body">
                       <div class="row">
                            <div class="col-md-3">
                                <div class="text-center">
                                    <img src="{{url("storage/$funcionario->foto")}}" class="avatar img-circle img-thumbnail" alt="avatar">
                                    <h4>{{$funcionario->cargo}}</h4>
                                </div>
                            </div>
                            <div class="col-md-9 personal-info">

                                <div class="row">
                                    <div class="col-4">
                                        <h6>RG: </h6>
                                        <input class="form-control" type="text" name="rg" id="rg" value={{$funcionario->rg}} @disabled(true)>
                                    </div>

                                    <div class="col-4">
                                        <h6 class="form-title">CPF: </h6>
                                        <input class="form-control" type="text" name="cpf" id="cpf" value={{$funcionario->cpf}} @disabled(true)>
                                    </div>

                                    <div class="col-4">
                                        <h6 class="form-title">TEL.: </h6>
                                        <input class="form-control" type="text" name="telefone" id="telefone" value={{$funcionario->telefone}} @disabled(true)>
                                    </div>
                                </div>
                                <br />
                                <div class="row">
                                    <div class="col-4">
                                        <h6 class="form-title">Estado Civil: </h6>
                                        <input class="form-control" type="text" name="estadoCivil" id="estadoCivil" value={{$funcionario->estadoCivil}} @disabled(true)>
                                    </div>
                                    <div class="col-4">
                                        <h6 class="form-title">Dependentes: </h6>
                                        <input class="form-control" type="text" name="qtdDependentes" id="qtdDependentes" value={{$funcionario->qtdDependentes}} @disabled(true)>
                                    </div>
                                    <div class="col-4">
                                        <h6 class="form-title">PIX: </h6>
                                        <input class="form-control" type="text" name="chavePix" id="chavePix" value={{$funcionario->chavePix}} @disabled(true)>
                                    </div>
                                </div>
                                <br />
                                <div class="row">
                                    <div class="col-6">
                                        <h6 class="form-title">Email: </h6>
                                        <input class="form-control" type="text" name="email" id="email" value={{$funcionario->email}} @disabled(true)>
                                    </div>
                                    <div class="col-6">
                                        <h6 class="form-title">PIS: </h6>
                                        <input class="form-control" type="text" name="pis" id="pis" value={{$funcionario->pis}} @disabled(true)>
                                    </div>
                                </div>



                          </div>
                        </div>
                    </div>
                </div> <!-- Fim do Card -->

                <div class="card">
                    <div class="card-header">
                      <h1 class="text-primary">Endereço</h1>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <input name="cep" type="text" class="form-control" id="cep" value={{$funcionario->cep}} disabled>
                            </div>

                            <div class="col-7">
                                <input class="form-control" type="text" name="rua" id="rua" value={{$funcionario->rua}} disabled >
                            </div>

                            <div class="col-2">
                                <input class="form-control" type="text" name="numero" id="numero" value={{$funcionario->numero}} disabled>
                            </div>
                        </div>

                        <br />
                        <div class="row">
                            <div class="col-3">
                                <input name="bairro" type="text" class="form-control" id="bairro" value={{$funcionario->bairro}} disabled>
                            </div>
                            <div class="col-3">
                                <input name="cidade" type="text" class="form-control" id="cidade" value={{$funcionario->cidade}} disabled>
                            </div>
                            <div class="col-3">
                                <input name="estado" type="text" class="form-control" id="estado" value={{$funcionario->estado}} disabled>
                            </div>
                            <div class="col-3">
                                <input name="pais" type="text" class="form-control" id="pais" value={{$funcionario->pais}} disabled>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fim do Card -->

                <div class="card">
                    <div class="card-header">
                      <h1 class="text-primary">Empresa</h1>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <h6 class="form-title">Departamento: </h6>
                                <input class="form-control" type="text" name="departamento" id="departamento" value={{$funcionario->departamento}} @disabled(true)>
                            </div>

                            <div class="col-4">
                                <h6 class="form-title">Admissão: </h6>
                                <input class="form-control" type="text" name="dataAdmissao" id="dataAdmissao" value={{$funcionario->dataAdmissao}} @disabled(true)>
                            </div>

                            <div class="col-4">
                                <h6 class="form-title">Periculoasidade: </h6>
                                <input class="form-control" type="text" name="periculosidade" id="periculosidade" value={{$funcionario->periculosidade}} @disabled(true)>
                            </div>
                        </div>

                        <br />
                        <div class="row">
                            <div class="col-4">
                                <h6 class="form-title">Salário Base:</h6>
                                <input class="form-control" type="text" name="salarioBase" id="salarioBase" value={{$funcionario->salarioBase}}  @disabled(true)>
                            </div>
                            <div class="col-4">
                                <h6 class="form-title">INSS:</h6>
                                <input class="form-control" type="text" name="inss" id="inss" value={{$funcionario->inss}} @disabled(true)>
                            </div>
                            <div class="col-4">
                                <h6 class="form-title">Salário Familia:</h6>
                                <input class="form-control" type="text" name="salarioFamilia" id="salarioFamilia" value={{$funcionario->salarioFamilia}} @disabled(true)>
                            </div>

                        </div>
                        <br />

                       @if(empty($holerites))
                        <a href={{route('holerites.create',['funcionario' => $funcionario->id])}} class="btn btn-primary">Gerar folha </a>
                       @else
                        <a href= {{route('holerites.index',['funcionario' => $funcionario->id])}} class="btn btn-primary"> Visualizar Folha</a>
                       @endif
                    </div>
                </div>
                <script>
                    let salarioBase = document.getElementById('salarioBase');
                    let inss = document.getElementById('inss');
                    let salarioFamilia = document.getElementById('salarioFamilia');
                    let periculosidade = document.getElementById('periculosidade');

                    salarioBase.value = formatarValor(salarioBase.value);
                    inss.value = formatarValor(inss.value);
                    salarioFamilia.value = formatarValor(salarioFamilia.value);
                    periculosidade = document.getElementById(periculosidade.value);


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
