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
                            <h3 class="card-title">Novo Grupo</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="" action="{{route('dashboard.groups.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="card-body container offset-md-2">

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="">Modalidade</label>
                                            <select name="modality" class="form-control">
                                                @foreach($modalities as $modality)
                                                <option value="{{$modality->id}}">{{$modality->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="">Professores</label>
                                            <select name="teachers[]" class="form-control @error('teachers') is-invalid @enderror" multiple>
                                                @foreach($teachers as $teacher)
                                                <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                                                @endforeach
                                            </select>
                                            @error('teachers')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="name">Nome *</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" id="name" placeholder="Exemplo Grupo A" name="name">

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
                                        <div class="form-group">
                                            <label for="local">Sala</label>
                                            <input type="text" class="form-control @error('local') is-invalid @enderror" value="{{old('local')}}" id="local" placeholder="" name="local">

                                            @error('local')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="num_students">Locatação Máxima</label>
                                            <input type="text" class="form-control @error('nanum_studentsme') is-invalid @enderror" value="{{old('num_students')}}" id="num_students" placeholder="" name="num_students">

                                            @error('num_students')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="price">Valor</label>
                                            <input type="text" class="form-control @error('price') is-invalid @enderror" value="{{old('price')}}" id="price" placeholder="" name="price">

                                            @error('price')
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
                                        <textarea class="form-control" id="description" name="description" placeholder="Descrição da modalidade...">{{old('description')}}</textarea>
                                    </div>
                                </div>

                            </div>
                            <!-- Fim card-body -->

                            <div class="row mb-5">
                                <div class="col-md-12">
                                    <div class="">
                                        <button type="submit" class="btn btn-info col-md-8 offset-2 elevation-3">Cadastrar</button>
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