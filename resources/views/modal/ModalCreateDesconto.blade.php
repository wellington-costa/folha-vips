@include('components.header')
@php
    $voltar = route('holerites.show',['holerite'=>$holerite->id])
@endphp


    <body>
                @include('components.navbar')
        <section>
            <main>

                <form  action={{route('holerites.store.desconto')}} method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                     <div class="card-header">
                       <h1 class="text-danger">Cadastro de Desconto</h1>
                     </div>
                       <div class="card-body">
                        <div class="row">

                            <div class="col-3">
                                <label class="fom-control">Descrição</label>
                                <input type="text" class="form-control text-danger" name="description" id="description" placeholder="descrição" required>
                            </div>


                            <div class="col-3">
                                <label class="fom-control">Valor:</label>
                                <input type="number" class="form-control" name="valor" id="valor" >
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
