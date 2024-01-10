@include('components.header')
@php
    $voltar = route('home.index')
@endphp


    <body>
                @include('components.navbar')
        <section>
            <main>
                <img src="../assets/Images/SystemImages/logo-azul.png" class="rounded" alt="Logo da Vips" title="Logo da Vips"><br><br>
                <form  action={{route('exercicios.store')}} method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                     <div class="card-header">
                       <h1 class="text-primary">Cadastre o ano de exercício</h1>
                     </div>
                       <div class="card-body">
                        <div class="row">
                         <div class="col-3">
                            <label class="fom-control">Ano</label>
                         </div>
                         <div class="col-3">
                            <input type="text" class="form-control" name="nome" id="nome" placeholder="informe o ano" required>
                         </div>
                         <div class="col-3">
                            <label class="fom-control">Atual?</label>
                         </div>
                         <div class="col-3">
                            <input type="checkbox" class="form-control" name="atual" id="atual" >
                         </div>
                        </div>
                        <div class="col-12 mt-5">
                            <button type="submit" class="btn btn-primary">CADASTRAR</button>
                        </div>
                     </div>
                    </div>

                </form>

                @include('components.backPainel')
                @include('components.footer')
            </main>
        </section>
    </body>
</html>
