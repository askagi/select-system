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
                            <h3 class="card-title">Novo Horário</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="" action="{{route('dashboard.schedules.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body container offset-md-2">

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="">Turma</label>
                                            <select name="group_id" class="form-control">
                                                @foreach($groups as $group)
                                                <option value="{{$group->id}}">{{$group->name}} / {{$group->modality->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="">Professor</label>
                                            <select name="teacher_id" class="form-control">
                                                @foreach($teachers as $g)

                                                <option value="{{$g->id}}">{{$g->name}}</option>

                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="">Dias da Semana</label>
                                            <select name="day_of_week" class="form-control @error('day_of_week') is-invalid @enderror" multiple>
                                                <option value="segunda">Segunda-feira</option>
                                                <option value="terca">Terça-feira</option>
                                                <option value="quarta">Quarta-feira</option>
                                                <option value="quinta">Quinta-feira</option>
                                                <option value="sexta">Sexta-feira</option>
                                                <option value="Sabado">Sábado-feira</option>
                                            </select>
                                            @error('day_of_week')
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
                                            <label for="start_time">Inicio da aula</label>
                                            <input type="time" class="form-control @error('start_time') is-invalid @enderror" value="{{old('start_time')}}" id="start_time" name="start_time">

                                            @error('start_time')
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
                                            <label for="end_time">Termino</label>
                                            <input type="time" class="form-control @error('end_time') is-invalid @enderror" value="{{old('end_time')}}" id="end_time" name="end_time">

                                            @error('end_time')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                            @enderror

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Fim card-body -->

                            <!-- /.card-body -->
                            <div class="row mb-5">
                                <div class="col-md-12">
                                    <div class="">
                                        <button type="submit" class="btn btn-info col-md-7 offset-2 elevation-3">Cadastrar</button>
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
