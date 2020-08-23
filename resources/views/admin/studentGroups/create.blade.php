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
                            <h3 class="card-title">Confirmação de Matricula</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="" action="{{route('dashboard.studentgroup.store')}}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <input type="hidden" name="student" value="{{$student->id}}">
                            <input type="hidden" name="group" value="{{$group->id}}">

                            <div class="card-body container offset-md-2">
                                <div class="row">
                                    <div class="col-md-8 border">
                                       
                                        <fieldset>
                                            <legend class="border-bottom">Dados do Cliente</legend>
                                            <div class="col-12">
                                                <label for="name">Nome: </label>
                                                <span>{{$student->name}}</span>

                                            </div>

                                            <div class="col-12">
                                                <label for="name">Matricula: </label>
                                                <span>{{$student->id}}</span>

                                            </div>

                                            <div class="col-12">
                                                <label for="name">RG: </label>
                                                <span>{{$student->rg}}</span>

                                            </div>

                                            <div class=" col-12">
                                                <label for="name">CPF: </label>
                                                <span>{{$student->cpf}}</span>

                                            </div>
                                        </fieldset>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-8 border">
                                        <fieldset>
                                            <legend class="border-bottom">Serviço</legend>
                                            <div class=" col-12">
                                                <label for="name">Modalidade: </label>
                                                <span>{{$group->modality->name}}</span>

                                            </div>

                                            <div class=" col-12">
                                                <label for="name">Turma: </label>
                                                <span>{{$group->name}}</span>

                                            </div>

                                            <div class="col-12">
                                                <label for="name">Valor: </label>
                                                <span>R$ {{number_format($group->price, '2', ',', '.')}}</span>

                                            </div>
                                        </fieldset>
                                    </div>
                                </div>


                            </div>
                            <!-- Fim card-body -->

                            <!-- /.card-body -->
                            <div class="row mb-5">
                                <div class="col-md-12">
                                    <div class="">
                                        <button type="submit" class="btn btn-info col-md-8 offset-2 elevation-3">Confirmar Matricular</button>
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

@endsection('content')