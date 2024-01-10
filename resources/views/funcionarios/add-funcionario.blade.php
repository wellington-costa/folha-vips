    @include('components.header')
    @php
        $voltar = route('funcionarios.index')
    @endphp


<body>
    @include('components.navbar')
    <section>
        <script src="../assets/js/apiCEP.js" type='module' defer></script>
        <script src="../assets/js/mascara.js" type='text/javascript'></script>
        <script src="path/to/jquery.js"></script>
        <main >
            <img src="../assets/Images/SystemImages/logo-azul.png" class="rounded" alt="Logo da Vips" title="Logo da Vips"><br><br>

            @if(session('success'))
                <div class="alert alert-success">
                    <h4 class="alert">{{session('success')}}</h4>
                </div>
            @endif

            <form  action={{route('funcionarios.store')}} method="POST" enctype="multipart/form-data">
             @csrf
             <div class="card">
              <div class="card-header">
                <h1 class="text-primary">Dados Pessoais</h1>
              </div>
                <div class="card-body">
                 <div class="row">
                  <div class="col-md-3">
                    <div class="text-center">
                      <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="avatar img-circle img-thumbnail" alt="avatar">
                      <h6>Foto do funcionario</h6>

                      <input type="file" class="form-control" name="foto" id="foto">
                    </div>
                  </div>

                  <!-- edit form column -->
                    <div class="col-md-9 personal-info">
                        <div class="row">
                            <div class="col-md-12 col-12 col-sm-12">
                                <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome completo" required pattern="([aA-zZzáàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+)" maxlength="50">
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-4">
                                <input class="form-control" type="text" name="rg" id="rg" placeholder="RG" onKeyPress="MascaraGenerica(this, 'RG');" inputmode="number" required pattern="[a-z0-9]+)" maxlength="13">
                            </div>

                            <div class="col-4">
                                <input class="form-control" type="text" name="cpf" id="cpf" placeholder="CPF" onKeyPress="MascaraGenerica(this, 'CPF');" inputmode="number" maxlength="14" pattern="^[0-9]{3}.?[0-9]{3}.?[0-9]{3}-?[0-9]{2}" required>
                            </div>

                            <div class="col-4">
                                <input class="form-control" type="text" name="telefone" maxlength="15" onKeyPress="MascaraGenerica(this, 'CELULAR');" class="form-control" id="telefone" placeholder="Telefone" required>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-4">
                              <div class="ui-select">
                                <select id="estadoCivil" name="estadoCivil" class="form-control">
                                <option value="solteiro">solteiro</option>
                                <option value="casado">casado</option>
                                <option value="divorciado">divorciado</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control" name="qtdDependentes" id="qtdDependentes" placeholder="Nº Dependentes" pattern="[0-9]+$" maxlength="2" onchange="calculaSalarioFamila()" required>
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control" name="chavePix" id="chavePix" placeholder="Chave Pix" required>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-6">
                                <input class="form-control" type="text" name="email" id="email" placeholder="E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" maxlength="50" required>
                            </div>
                            <div class="col-6">
                                <input class="form-control" type="text" name="pis" id="pis" placeholder="PIS" pattern="[a-z0-9]+)" maxlength="11" required>
                            </div>
                        </div>



                  </div>
              </div>
            </div>
        </div><!-- Fim  do Card -->


            <br />
            <div class="card">
                <div class="card-header">
                    <h1 class="text-primary">Endereço</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <input name="cep" type="text" class="form-control" id="cep" placeholder="CEP" pattern="[0-9]+$" maxlength="8" required>
                        </div>

                        <div class="col-7">
                            <input class="form-control" type="text" name="rua" id="rua" placeholder="Rua"  required >
                        </div>

                        <div class="col-2">
                            <input class="form-control" type="text" name="numero" id="numero" placeholder="Nº"  inputmode="number">
                        </div>
                    </div>

                   <br />
                   <div class="row">
                    <div class="col-3">
                        <input name="bairro" type="text" class="form-control" id="bairro" maxlength="50" pattern="([aA-zZzáàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+)" placeholder="Bairro" required>
                    </div>
                    <div class="col-3">
                        <input name="cidade" type="text" class="form-control" id="cidade" maxlength="50" pattern="([aA-zZzáàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+)" placeholder="Cidade" required>
                    </div>
                    <div class="col-3">
                        <input name="estado" type="text" class="form-control" id="estado" maxlength="50" pattern="([aA-zZzáàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+)" placeholder="Estado" value="Bahia">
                    </div>
                    <div class="col-3">
                        <input name="pais" type="text" class="form-control" id="pais" maxlength="50" pattern="([aA-zZzáàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+)" placeholder="País" value="Brasil">
                    </div>
                   </div>
              </div>
            </div> <!-- Fim  do Card -->

          </div>
          <div class="card">
                <div class="card-header">
                    <h1 class="text-primary">Empresa</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <select class="form-select" aria-h3="Default select example" name="cargo" id="cargo" onchange="preenchePericulosidade()">
                                <option value="Gerente">Gerente</option>
                                <option value="Técnico">Técnico</option>
                                <option value="Auxiliar Administrativo">Auxiliar Administrativo </option>
                                <option value="Atendente">Atendente</option>
                                <option value="Auxiliar Técnico">Auxiliar Técnico</option>
                                <option value="Estagiário">Estagiário</option>
                                <option value="Serviços Gerais">Serviços Gerais</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <select class="form-select" aria-h3="Default select example" name="departamento" id="departamento">
                                <option value="Administrativo">Administrativo</option>
                                <option value="Operacional">Operacional</option>
                                <option value="Vendas">Vendas</option>

                            </select>
                        </div>
                        <div class="col-1">
                            <label class="control-label">Admissão:</label>
                        </div>

                        <div class="col-3">
                            <input name="dataAdmissao" type="date" class="form-control" id="dataAdmissao" placeholder="Admissão" required>
                        </div>


                    </div>
                    <br />
                    <div class="row">
                        <div class="col-3">
                            <input name="salarioBase" type="number" step="0.01" min="0" max="50000" class="form-control" id="salarioBase" placeholder="Salário Base" onchange="preenchePericulosidade()" required>
                        </div>
                        <div class="col-2">
                            <label for="periculosidade" class="form-control">Periculosidade: R$</label>
                        </div>

                        <div class="col-2">
                            <input name="salarioPericulosidade" type="number" id="salarioPericulosidade" class="form-control" >
                        </div>
                        <div class="col-2">
                            <label for="Demissão" class="form-control">Salario Familia R$: </label>
                        </div>
                        <div class="col-2">
                            <input name="salarioFamilia" type="number" id="salarioFamilia" class="form-control" step="0.01" >
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-3">
                            <label class="form-control">INSS R$:</label>
                        </div>
                        <div class="col-3">
                            <input name="inss" type="number" id="inss" class="form-control" step="0.01" >
                        </div>
                        <div class="col-3">
                            <label class="form-control"></label>
                        </div>
                        <div class="col-3">
                            <label class="form-control"></label>
                        </div>
                    </div>



                  </div>
                </div><!-- Fim  do Card -->

            </div>

            <div class="col-12 mt-5">
                <button type="submit" class="btn btn-primary">CADASTRAR</button>
            </div>
         </form>
         <script>
            function preenchePericulosidade(){

                let salarioBase = parseFloat(document.getElementById('salarioBase').value);
                let cargo = document.getElementById('cargo').value;
                let salarioPericulosidade = document.getElementById('salarioPericulosidade');
                let salarioBruto = salarioBase;
                let inss = document.getElementById('inss');
                let valorINSS = 0;

                if(cargo == 'Técnico' && salarioBase){

                    periculosidade = salarioBase*0.3;
                    salarioBruto = salarioBase + periculosidade;
                    salarioPericulosidade.value = periculosidade;
                    
                }else{
                    salarioPericulosidade.value = 0;
                }


                if(salarioBruto <= 1320){
                    inss.value = salarioBruto*0.075;
                }
                if(salarioBruto > 1320 && salarioBruto < 2571.30){
                    let faixa1 = 99;
                    let faixa2 = (salarioBruto - 1320)*0.09;

                    inss.value = faixa1 + faixa2;
                }
                if(salarioBruto >= 2571.30 && salarioBruto < 3856.95){
                    let faixa1 = 99;
                    let faixa2 = (2571.29 - 1320)*0.09;
                    let faixa3 = (salarioBruto - 2571.29)*0.12;
                    inss.value = faixa1+faixa2+faixa3;
                }

                console.log(inss.value);




            }
            function calculaSalarioFamila(){
                let salarioFamilia = document.getElementById('salarioFamilia');
                let qtdDependentes = document.getElementById('qtdDependentes').value;
                salarioFamilia.value = parseFloat(qtdDependentes*59.82);
            }


         </script>

            @include('components.backPainel')
            @include('components.footer')
    </main>
  </section>
</body>
</html>




