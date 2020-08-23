@extends('layouts.app')

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
                            <h3 class="card-title">Nova Modalidade</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="" action="{{route('dashboard.modalities.update', ['modality' => $modality->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body container offset-md-2">

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="name">Nome *</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{$modality->name}}" id="name" placeholder="Insira o nome modalidade" name="name">

                                            @error('name')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <label for="description">Descrição</label>
                                        <textarea class="form-control" id="description" name="description" placeholder="Descrição da modalidade...">{{$modality->description}}</textarea>
                                    </div>
                                </div>

                            </div>
                            <!-- Fim card-body -->

                            <!-- Card Input-file -->
                            <div class="row">
                                <!-- left column -->
                                <div class="col-md-12">
                                    <!-- general form elements -->
                                    <div class="card card-info elevation-0">
                                        <div class="card-header callout">
                                            <h3 class="card-title">Foto</h3>
                                        </div>
                                        <!-- /.card-header -->

                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-8 m-auto">
                                                    <div class="form-group">
                                                        <label for="exampleInputFile">Selecione uma imagem</label>
                                                        <div class="input-group">
                                                            <div class="custom-file">
                                                                <input type="file" name="photo" class="custom-file-input @error('photo') is-invalid @enderror" value="{{old('photo')}}" id="photo">
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
                                            @if($modality->photo)
                                            <div class="row">
                                                <div class="col-md-5 m-auto">
                                                    <img src="{{asset('storage/' .$modality->photo)}}" class="img-responsive img-fluid img-rounded" alt="Foto do aluno {{$modality->name}}" style="width: 80%;">
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
                                <div class="col-md-12">
                                    <div class="">
                                        <button type="submit" class="btn btn-info col-md-7 offset-2 elevation-3">Atualizar</button>
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