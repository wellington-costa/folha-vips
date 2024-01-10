 @include('components.header')


 <body>
    @include('components.navbar')
    <section>
        <main>
            <img src="../assets/Images/SystemImages/Logo-azul.png" class="rounded" alt="Logo da Vips" title="Logo da Vips"><br><br>
                <h1 class="h1 mt-5 mb-2 fw-normal">Bem vindo, {{ session()->get('nome') }} !</h1>
                @if(session('msg'))
                    <div class="row">
                         <h5> {{ session('msg') }}</h5>
                    </div>
                @endif
                <div class="row mt-5" >
                    <a href={{route('funcionarios.index')}} style="width: auto" title="Gerenciar Funcionários">
                        <div class="person">
                            <div class="container">
                                <div class="container-inner">
                                    <img class="circle"/>
                                    <img class="img img1" alt="Gerenciar Funcionários" src="/assets/Images/SystemImages/cadastrar.svg"/>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="name">GERENCIAR FUNCIONÁRIOS</div>
                            <div class="title">Consulta, altera e remove informações pertinentes aos funcionários</div>
                        </div>
                    </a>
                    <a href="/gerenciar_folha_pagamento" style="width: auto" title="Gerenciar Folha de Pagamento">
                        <div class="person">
                            <div class="container">
                                <div class="container-inner">
                                    <img class="circle"/>
                                    <img class="img img1" alt="Gerenciar Folha de Pagamento" src="/assets/Images/SystemImages/folhaPagamento.svg"/>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="name">GERENCIAR<br>FOLHA DE PAGAMENTO</div>
                            <div class="title">Registra e consulta a folha de pagamento e altera informações</div>
                        </div>
                    </a>
                    <a href="{{route('exercicios.create')}}" style="width: auto" title="Cadastrar Exercicios">
                        <div class="person">
                            <div class="container">
                                <div class="container-inner">
                                    <img class="circle"/>
                                    <img class="img img1" alt="Cadastrar Exercicios" src="/assets/Images/SystemImages/holerite.svg"/>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="name">CADASTRAR<br>EXERCÍCIOS</div>
                            <div class="title">Registra os anos de exercicio</div>
                        </div>
                    </a>



                </div>

        <!--
            <div class="row">
                <a href="/holerite" style="width: auto" title="Seu Holerite">
                    <div class="person">
                        <div class="container">
                            <div class="container-inner">
                                <img class="circle"/>
                                <img class="img img1" alt="Seu Holerite" src="/assets/Images/SystemImages/holerite2.svg"/>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="name">HOLERITE</div>
                        <div class="title">Consulta ao seu holerite</div>
                    </div>
                </a>
                <a href="/folha_ponto" style="width: auto" title="Folha de Ponto">
                    <div class="person">
                        <div class="container">
                            <div class="container-inner">
                                <img class="circle"/>
                                <img class="img img1" alt="Folha de Ponto" src="/assets/Images/SystemImages/folhaPonto.svg"/>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="name">FOLHA DE PONTO</div>
                        <div class="title">Consulta a sua folha de ponto</div>
                    </div>
                </a>
                <a href="/registro_ponto" style="width: auto" title="Registro de Ponto">
                    <div class="person">
                        <div class="container">
                            <div class="container-inner">
                                <img class="circle"/>
                                <img class="img img1" alt="Registro de Ponto" src="/assets/Images/SystemImages/registroPonto.svg"/>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="name">REGISTRO DE PONTO</div>
                        <div class="title">Registra o seu ponto diário</div>
                    </div>
                </a>
            </div>-->

            @include('components.footer')
        </main>
    </section>

 </body>


</html>
