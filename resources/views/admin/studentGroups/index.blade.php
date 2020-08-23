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
                            <h3 class="card-title">Seleção de turma</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <div class="card-body container offset-md-2">
                            <div class="row">
                                <div class="col-md-8 ">

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
                                <div class="col-md-8 ">
                                    <fieldset>
                                        <legend class="border-bottom">Serviço</legend>
                                        @forelse($groups as $group)
                                        @if(!$student->groups->contains($group->id))
                                        <span>{{$group->name}}</span>
                                        <a class="float-right mr-4" href="{{route('dashboard.studentgroup.create', ['student_id' => $student->id, 'group_id' => $group->id])}}">Matricular</a>
                                        <hr>
                                        @endif
                                        @empty
                                        @endforelse
                                    </fieldset>
                                </div>
                            </div>


                        </div>
                        <!-- Fim card-body -->

                        <!-- /.card-body -->

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