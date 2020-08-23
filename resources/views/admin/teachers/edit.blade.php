@extends('layouts.app')

@section('head')
<!-- Adicionando Javascript -->
<script type="text/javascript">
    function limpa_formulário_cep() {
        //Limpa valores do formulário de cep.
        document.getElementById('street').value = ("");
        document.getElementById('neighborhood').value = ("");
        document.getElementById('city').value = ("");
        document.getElementById('state').value = ("");

    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('street').value = (conteudo.logradouro);
            document.getElementById('neighborhood').value = (conteudo.bairro);
            document.getElementById('city').value = (conteudo.localidade);
            document.getElementById('state').value = (conteudo.uf);

        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }

    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if (validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('street').value = "...";
                document.getElementById('neighborhood').value = "...";
                document.getElementById('city').value = "...";
                document.getElementById('state').value = "...";


                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };
</script>
@endsection


@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="" style="overflow-x: hidden;">
    <!-- Main content -->
    <section class="content">
        <br>
        <div class="container">
            <div class="row">
                <!-- left column -->
                <div class="col-md-11 ml-5">
                    <!-- general form elements -->
                    <div class="card card-info">
                        <div class="card-header callout elevation-0">
                            <h3 class="card-title">Novo Professor</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="" autocomplete="off" action="{{route('dashboard.teachers.update', ['teacher' => $teacher->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body container offset-md-2">

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="name">Nome *</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{$teacher->name}}" id="name" placeholder="Insira o nome completo do aluno" name="name">

                                            @error('name')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="rg">RG *</label>
                                            <input type="text" class="form-control @error('rg') is-invalid @enderror" value="{{$teacher->rg}}" id="rg" placeholder="Insira apenas números" name="rg">

                                            @error('rg')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror

                                        </div>
                                    </div>


                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="cpf">CPF *</label>
                                            <input type="text" class="form-control @error('cpf') is-invalid @enderror" value="{{$teacher->cpf}}" id="cpf" placeholder="Insira apenas números" name="cpf">

                                            @error('cpf')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror

                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="date_brith">Data de Nascimento *</label>
                                            <input type="date" class="form-control @error('date_birth') is-invalid @enderror" value="{{$teacher->date_birth}}" id="date_birth" name="date_birth">

                                            @error('date_birth')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror

                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-8">
                                        <label>Sexo</label>
                                        <div class="form-inline">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" id="sexoMasculino" value="masculino" checked>
                                                <label class="form-check-label" for="masculino">
                                                    Masculino
                                                </label>
                                            </div>
                                            <div class="form-check ml-3 mr-3">
                                                <input class="form-check-input" type="radio" name="gender" id="sexoFeminino" value="feminino" @if($teacher->gender == 'feminino') checked @endif>
                                                <label class="form-check-label" for="feminino">
                                                    Feminino
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" id="outro" value="outro" @if($teacher->gender == 'outro') checked @endif>
                                                <label class="form-check-label" for="outro">
                                                    Outro
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="phone">Telefone/Whatsapp *</label>
                                            <input type="tel" class="form-control @error('phone') is-invalid @enderror" value="{{$teacher->phone}}" id="phone" placeholder="Insera o telefone do aluno" name="phone">

                                            @error('phone')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror

                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="email">Email *</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{$teacher->email}}" id="email" placeholder="Insira o email do aluno" name="email">

                                            @error('email')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <label for="obs">Nota de Observação</label>
                                        <textarea class="form-control" id="obs" name="obs" placeholder="Nota de observação"> {{$teacher->obs}} </textarea>
                                    </div>
                                </div>

                            </div>
                            <!-- Fim card-body -->

                            <!-- Card Input-Address -->
                            <div class="row mt-4    ">
                                <!-- left column -->
                                <div class="col-md-12">
                                    <!-- general form elements -->
                                    <div class="card card-info elevation-0">
                                        <div class="card-header callout callout-warning elevation-0">
                                            <h3 class="card-title">Endereço</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body container offset-md-2">

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="cep">CEP</label>
                                                        <input type="text" onblur="pesquisacep(this.value);" class="form-control @error('cep') is-invalid @enderror" value="{{$teacher->cep}}" id="cep" placeholder="Insira somente números" name="cep">

                                                        @error('cep')
                                                        <div class="invalid-feedback">
                                                            {{$message}}
                                                        </div>
                                                        @enderror

                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="street">Rua</label>
                                                        <input type="text" class="form-control @error('street') is-invalid @enderror" value="{{$teacher->street}}" id="street" placeholder="Rua" name="street">

                                                        @error('street')
                                                        <div class="invalid-feedback">
                                                            {{$message}}
                                                        </div>
                                                        @enderror

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="neighborhood">Bairro</label>
                                                        <input type="text" class="form-control @error('neighborhood') is-invalid @enderror" value="{{$teacher->neighborhood}}" id="neighborhood" placeholder="Bairro" name="neighborhood">

                                                        @error('neighborhood')
                                                        <div class="invalid-feedback">
                                                            {{$message}}
                                                        </div>
                                                        @enderror

                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="city">Cidade</label>
                                                        <input type="text" class="form-control @error('city') is-invalid @enderror" value="{{$teacher->city}}" id="city" placeholder="Cidade" name="city">

                                                        @error('city')
                                                        <div class="invalid-feedback">
                                                            {{$message}}
                                                        </div>
                                                        @enderror

                                                    </div>
                                                </div>

                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <label for="state">Estado</label>
                                                        <input type="text" class="form-control @error('state') is-invalid @enderror" value="{{$teacher->state}}" id="state" placeholder="UF" name="state">

                                                        @error('state')
                                                        <div class="invalid-feedback">
                                                            {{$message}}
                                                        </div>
                                                        @enderror

                                                    </div>
                                                </div>
                                            </div>

                                        </div><!-- fim card-body -->
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Card Address -->

                            <!-- Card Input-file -->
                            <div class="row">
                                <!-- left column -->
                                <div class="col-md-12">
                                    <!-- general form elements -->
                                    <div class="card card-info elevation-0">
                                        <div class="card-header callout">
                                            <h3 class="card-title">Foto de Perfil</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <!-- form start -->
                                        <!-- <form role="form" name="form_img" method="POST" enctype="multipart/form-data"> -->
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-8 m-auto">
                                                    <div class="form-group">
                                                        <label for="exampleInputFile">Selecione uma imagem</label>
                                                        <div class="input-group">
                                                            <div class="custom-file">
                                                                <input type="file" name="photo" class="custom-file-input @error('photo') is-invalid @enderror" id="photo">
                                                                <label class="custom-file-label " data-browse="Selecionar Foto" for="photo">Clique aqui para carregar foto</label>

                                                                @error('photo')
                                                                <div class="invalid-feedback">
                                                                    {{$message}}
                                                                </div>
                                                                @enderror

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- fotos -->
                                            @if($teacher->photo)
                                            <div class="row">
                                                <div class="col-md-5 m-auto">
                                                    <img src="{{asset('storage/' .$teacher->photo)}}" class="img-responsive img-fluid img-rounded" alt="Foto do aluno {{$teacher->name}}" style="width: 80%;">
                                                </div>
                                            </div>
                                            @endif
                                        </div><!-- fim car-body -->
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Card input-file -->
                            <!-- /.card-body -->
                            <div class="row mb-5">
                                <div class="col-md-8 m-auto">
                                    <div class="">
                                        <button type="submit" class="btn btn-info col-md-12 elevation-3">Atualizar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->

                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection