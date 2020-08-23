@extends('layouts.app')

@section('content')
<br>
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">


                    <div class="row">
                        <nav class="w-100">
                            <div class="nav nav-tabs" id="product-tab" role="tablist">
                                <a class="nav-item nav-link active" id="group-tab" data-toggle="tab" href="#group" role="tab" aria-controls="group" aria-selected="true">Turma</a>
                                <a class="nav-item nav-link" id="students-tab" data-toggle="tab" href="#students" role="tab" aria-controls="students" aria-selected="false">Alunos</a>
                                <a class="nav-item nav-link" id="schedule-tab" data-toggle="tab" href="#schedule" role="tab" aria-controls="schedule" aria-selected="false">Quadro de Horários</a>
                            </div>
                        </nav>
                        <div class="tab-content p-3 col-md-12" id="nav-tabContent">

                            <div class="tab-pane fade show active" id="group" role="tabpanel" aria-labelledby="group-tab">

                                <div class="container">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="row mb-3">

                                                <div class="col-md-6">
                                                    <strong> Modalidade: </strong> <span class="text-muted ml-3">{{$group->modality->name}}</span>
                                                    <hr>
                                                </div>

                                                <div class="col-md-6">
                                                    <strong>Valor: </strong><span class="text-muted ml-3">R$ {{number_format($group->price, '2', ',', '.') }} </span>
                                                    <hr>
                                                </div>

                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <strong>Grupo: </strong><span class="text-muted ml-3"> {{$group->name}} </span>
                                                    <hr>
                                                </div>

                                                <div class="col-md-6">
                                                    <strong>Sala: </strong><span class="text-muted ml-3"> {{$group->local}} </span>
                                                    <hr>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="progress-group col-10">
                                                        <span class="progress-text "><strong>Matriculados: </strong></span>
                                                        <span class="float-right"><b>{{$group->students->count()}}</b>/{{$group->num_students}}</span>
                                                        <div class="progress mt-2 ml-5">
                                                            <div class="progress-bar bg-primary" style="width:{{ ($group->students->count() * 100) / $group->num_students}}%" aria-valuenow="{{$group->students->count()}}" aria-valuemin="0" aria-valuemax="{{$group->num_students}}">{{($group->students->count() * 100)/$group->num_students}}%</div>
                                                        </div>
                                                    </div>
                                                    <div class="text-center">
                                                        <span class="text-muted ml-3 text-center"> {{$group->num_students - $group->students->count()}} Vaga(s) aberta(s)</span>
                                                    </div>
                                                    <hr>
                                                </div>

                                                <div class="col-md-6">
                                                    @forelse($group->teachers as $teacher)
                                                    <div class="user-block col-6">
                                                        @if($teacher->photo)
                                                        <img class="img-circle img-bordered-sm" src="{{asset('storage/'. $teacher->photo)}}" alt="user image">
                                                        @else
                                                        <img class="img-circle img-bordered-sm" src="{{asset('storage/assets/no-photo.jpg')}}" alt="user image">
                                                        @endif
                                                        <span class="username">
                                                            <a class="" href="{{route('dashboard.teachers.show', ['teacher' => $teacher->id])}}">{{$teacher->name}} </a>
                                                        </span>
                                                    </div>

                                                    @empty
                                                    <span class="text-muted ml-3"> Não existe professor vinculado a turma </span>
                                                    @endforelse

                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <strong>Descrição: </strong><span class="text-muted ml-2 mt-2">{{$group->description}}</span>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="float-right">
                                    <a href="{{route('dashboard.groups.edit', ['group' => $group->id])}}" class="btn btn-primary btn-sm  elevation-2"><i class="fa fa-edit"></i> Editar</a>
                                </div>

                                <form action="{{route('dashboard.groups.destroy', ['group' => $group->id])}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash">
                                        </i>
                                        Deletar
                                    </button>
                                </form>

                            </div>

                            <div class="tab-pane fade" id="students" role="tabpanel" aria-labelledby="students-tab">
                                <div class="card ml-2 mr-2">
                                    <div class="card-header callout callout-info elevation-0">
                                        <div class="card-title col-md-6">
                                            <h4>Alunos Matriculados</h4>
                                        </div>
                                    </div>

                                    <div class="card-body p-0" style="height: 300px;">
                                        <table class="table table-striped table-head-fixed text-nowrap projects container-fluid">
                                            <thead class="">
                                                <tr>

                                                    <th style="width: 15%">
                                                        Matricula
                                                    </th>
                                                    <th style="width: 15%">
                                                        Foto
                                                    </th>

                                                    <th style="width: %">
                                                        Nome
                                                    </th>

                                                    <th style="width: 20%" class="">
                                                        Ações
                                                    </th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                @forelse ($group->students as $student)
                                                <tr>
                                                    <td>
                                                        {{$student->id}}
                                                    </td>
                                                    <td class="">
                                                        @if($student->photo)
                                                        <img alt="Avatar" class="img-circle img-bordered-sm" src="{{asset('storage/' . $student->photo)}}" style="width: 60px; height:60px ;">
                                                        @else
                                                        <img alt="Avatar" class="materialboxed img-fluid img-rounded img-responsive" src="{{asset('storage/assets/no-photo.jpg')}}" style="width: 80px; height:80px ;">
                                                        @endif
                                                    </td>

                                                    <td>
                                                        {{$student->name}}
                                                    </td>

                                                    <td class="project-actions ">


                                                        <a class="btn btn-info btn-sm w-50 " href="{{route('dashboard.students.show', ['student' => $student->id])}}">
                                                            <i class="far fa-eye">
                                                            </i>

                                                        </a>

                                                    </td>
                                                </tr>
                                                @empty
                                                <tr>
                                                    <td colspan="6" class="container">
                                                        <div class="col-md-12 text-center">
                                                            <h4>Vazio! <i class="fa fa-ghost"></i> </h4>
                                                        </div>
                                                    </td>
                                                </tr>

                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <div class="tab-pane fade" id="schedule" role="tabpanel" aria-labelledby="schedule-tab">



                                <div class="row" @if($group->schedules->where('day_of_week', 'segunda')->count() == 0) hidden @endif>
                                    <div class="col-md-12">
                                        <ul class="mt-3">
                                            <h5>Segunda-Feira</h5>
                                            <hr>
                                            @forelse($group->schedules as $schedule)
                                            @if($schedule->day_of_week == 'segunda')
                                            <li class="ml-4">{{$schedule->start_time}} -- {{$schedule->end_time}} - Prof. {{$teachers->find($schedule->group_id)->name}}</li>

                                            @endif
                                            @empty
                                            @endforelse
                                        </ul>
                                    </div>
                                </div>


                                <div class="row" @if($group->schedules->where('day_of_week', 'terca')->count() == 0) hidden @endif>
                                    <div class="col-md-12">

                                        <ul class="mt-3">
                                            <h5>Terça-Feira</h5>
                                            <hr>
                                            @forelse($group->schedules as $schedule)
                                            @if($schedule->day_of_week == 'terca')
                                            <li class="ml-4">{{$schedule->start_time}} -- {{$schedule->end_time}} - Prof. {{$teachers->find($schedule->group_id)->name}}</li>
                                            @endif
                                            @empty
                                            @endforelse
                                        </ul>
                                    </div>
                                </div>

                                <div class="row" @if($group->schedules->where('day_of_week', 'quarta')->count() == 0) hidden @endif>
                                    <div class="col-md-12">

                                        <ul class="mt-3">
                                            <h5>Quarta-Feira</h5>
                                            <hr>
                                            @forelse($group->schedules as $schedule)
                                            @if($schedule->day_of_week == 'quarta')
                                            <li class="ml-4">{{$schedule->start_time}} -- {{$schedule->end_time}} - Prof. {{$teachers->find($schedule->group_id)->name}}</li>
                                            @endif
                                            @empty
                                            @endforelse
                                        </ul>
                                    </div>
                                </div>


                                <div class="row" @if($group->schedules->where('day_of_week', 'quinta')->count() == 0) hidden @endif>
                                    <div class="col-md-12">

                                        <ul class="mt-3">
                                            <h5>Quinta-Feira</h5>
                                            <hr>
                                            @forelse($group->schedules as $schedule)
                                            @if($schedule->day_of_week == 'quinta')
                                            <li class="ml-4">{{$schedule->start_time}} -- {{$schedule->end_time}} - Prof. {{$teachers->find($schedule->group_id)->name}}</li>
                                            @endif
                                            @empty
                                            @endforelse
                                        </ul>
                                    </div>
                                </div>


                                <div class="row" @if($group->schedules->where('day_of_week', 'sexta')->count() == 0) hidden @endif>
                                    <div class="col-md-12">

                                        <ul class="mt-3">
                                            <h5>Sexta-Feira</h5>
                                            <hr>
                                            @forelse($group->schedules as $schedule)
                                            @if($schedule->day_of_week == 'sexta')
                                            <li class="ml-4">{{$schedule->start_time}} -- {{$schedule->end_time}} - Prof. {{$teachers->find($schedule->group_id)->name}}</li>
                                            @endif
                                            @empty
                                            @endforelse
                                        </ul>
                                    </div>
                                </div>

                                <div class="row" @if($group->schedules->where('day_of_week', 'sabado')->count() == 0) hidden @endif>
                                    <div class="col-md-12">

                                        <ul class="mt-3">
                                            <h5>Sábado</h5>
                                            <hr>
                                            @forelse($group->schedules as $schedule)
                                            @if($schedule->day_of_week == 'sabado')
                                            <li class="ml-4">{{$schedule->start_time}} -- {{$schedule->end_time}} - Prof. {{$teachers->find($schedule->group_id)->name}}</li>
                                            @endif
                                            @empty
                                            @endforelse
                                        </ul>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- /.card -->
        </div>
    </div>
</section>

@endsection