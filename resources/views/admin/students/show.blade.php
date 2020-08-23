@extends('layouts.app')

@section('content')

<!-- /.content-header -->
<section class="content ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="card card-purple card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            @if($student->photo)
                            <img alt="Avatar" class="materialboxed img-rounded img-circle rounded-black img-fluid img-responsive" src="{{asset('storage/' . $student->photo)}}" style="width: 80%; height:160px;">
                            @else
                            <img alt="Avatar" class="materialboxed img-rounded img-circle profile-user-img img-fluid img-responsive" src="{{asset('storage/assets/no-photo.jpg')}}" style="width: 80%; height:160px ;">
                            @endif
                        </div>

                        <h3 class="profile-username text-center">{{$student->name}}</h3>

                        <!--<p class="text-muted text-center">00{{$student->id}} </p> -->

                        <ul class="list-group list-group-unbordered mb-3">

                            <li class="list-group-item">
                                <b>ID</b> <a class="float-right"> {{$student->id}} </a>
                            </li>

                            <li class="list-group-item">
                                <b>Sexo</b> <a class="float-right">{{$student->gender}}</a>
                            </li>

                            <li class="list-group-item">
                                <b>Idade</b> <a class="float-right">
                                    {{Date('Y') - Date('Y', strtotime($student->date_birth))}}
                                </a>
                            </li>

                            <li class="list-group-item">
                                <b>Altura</b> <a class="float-right">1,67</a>
                            </li>
                            <li class="list-group-item">
                                <b>Massa corporal</b> <a class="float-right">69 Kg</a>
                            </li>

                        </ul>

                        <a href="#" class="btn btn-primary btn-block"><b>Ficha de Avaliação completa</b></a>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->


            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#studentDate" data-toggle="tab">Dados do Aluno</a></li>
                            <li class="nav-item"><a class="nav-link" href="#modality" data-toggle="tab">Matricula</a></li>
                            <li class="nav-item"><a class="nav-link" href="#payment" data-toggle="tab">Histórico de pagamentos</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">

                            <!-- studentDate dados do aluno -->
                            <div class="tab-pane " id="studentDate">
                                <div class="card-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row mb-3">

                                                    <div class="col-md-6">
                                                        <strong><i class="fas fa-user mr-1 mb-3"></i> Nome</strong>
                                                        <p class="text-muted ml-3">{{$student->name}}</p>
                                                        <hr>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <strong><i class="far fa-id-card mr-1 mb-3"></i> RG</strong>
                                                        <p class="text-muted ml-3">{{$student->rg}}</p>
                                                        <hr>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <strong><i class="far fa-address-card mr-1 mb-3"></i> CPF</strong>
                                                        <p class="text-muted ml-3">{{$student->cpf}}</p>
                                                        <hr>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">

                                                    <div class="col-md-6">
                                                        <strong><i class="fas fa-at mr-1 mb-3"></i> Email</strong>
                                                        <p class="text-muted ml-3">{{$student->email}}</p>
                                                        <hr>
                                                    </div>

                                                    <div class="col-md-3 mt-2">
                                                        <strong><i class="ion-social-whatsapp mr-1"></i> Telefone</strong>
                                                        <p class="text-muted ml-4">{{$student->phone}}</p>
                                                        <hr>
                                                    </div>

                                                    <div class="col-md-3 mt-2">
                                                        <strong><i class="far fa-calendar-alt mr-1 mb-2"></i> Data de nascimento</strong>
                                                        <p class="text-muted ml-3">{{date('d / m / Y', strtotime($student->date_birth))}}</p>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-12">

                                                        <strong><i class="far fa-clipboard mr-1"></i> Nota de Observação</strong>
                                                        <p class="text-muted callout callout-warning elevation-0 ml-2 mt-2">{{$student->obs}}</p>
                                                        <hr>

                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-6">

                                                        <strong><i class="fas fa-map-marked-alt mr-1 mb-3"></i> CEP</strong>
                                                        <p class="text-muted ml-3">{{$student->cep}}</p>
                                                        <hr>

                                                    </div>

                                                    <div class="col-md-6">
                                                        <strong><i class="fas fa-map-marked-alt mr-1 mb-3"></i> Rua</strong>
                                                        <p class="text-muted ml-3">{{$student->street}}</p>
                                                        <hr>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <strong><i class="fas fa-map-marked-alt mr-1 mb-3"></i> Bairro</strong>
                                                        <p class="text-muted ml-3">{{$student->neighborhood}}</p>
                                                        <hr>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <strong><i class="fas fa-map-marked-alt mr-1 mb-3"></i> Cidade</strong>
                                                        <p class="text-muted ml-3">{{$student->city}}</p>
                                                        <hr>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <strong><i class="fas fa-map-marked-alt mr-1 mb-3"></i> Estado</strong>
                                                        <p class="text-muted ml-3">{{$student->state}}</p>
                                                        <hr>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="text-center">
                                    <a href="{{route('dashboard.students.edit', ['student' => $student->id])}}" class="btn btn-primary w-75 elevation-2">Editar</a>
                                </div>

                            </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="payment">

                                <!-- The timeline -->
                                <div class="timeline timeline-inverse">
                                    <!-- timeline time label -->
                                    <div class="time-label">
                                        <span class="bg-danger">
                                            10 Feb. 2014
                                        </span>
                                    </div>
                                    <!-- /.timeline-label -->
                                    <!-- timeline item -->
                                    <div>
                                        <i class="fas fa-envelope bg-primary"></i>

                                        <div class="timeline-item">
                                            <span class="time"><i class="far fa-clock"></i> 12:05</span>

                                            <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                                            <div class="timeline-body">
                                                Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                                weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                                jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                                quora plaxo ideeli hulu weebly balihoo...
                                            </div>
                                            <div class="timeline-footer">
                                                <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                                <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END timeline item -->
                                    <!-- timeline item -->
                                    <div>
                                        <i class="fas fa-user bg-info"></i>

                                        <div class="timeline-item">
                                            <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                                            <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
                                            </h3>
                                        </div>
                                    </div>
                                    <!-- END timeline item -->
                                    <!-- timeline item -->
                                    <div>
                                        <i class="fas fa-comments bg-warning"></i>

                                        <div class="timeline-item">
                                            <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                                            <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                                            <div class="timeline-body">
                                                Take me to your leader!
                                                Switzerland is small and neutral!
                                                We are more like Germany, ambitious and misunderstood!
                                            </div>
                                            <div class="timeline-footer">
                                                <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END timeline item -->
                                    <!-- timeline time label -->
                                    <div class="time-label">
                                        <span class="bg-success">
                                            3 Jan. 2014
                                        </span>
                                    </div>
                                    <!-- /.timeline-label -->
                                    <!-- timeline item -->
                                    <div>
                                        <i class="fas fa-camera bg-purple"></i>

                                        <div class="timeline-item">
                                            <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                                            <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                                            <div class="timeline-body">
                                                <img src="http://placehold.it/150x100" alt="...">
                                                <img src="http://placehold.it/150x100" alt="...">
                                                <img src="http://placehold.it/150x100" alt="...">
                                                <img src="http://placehold.it/150x100" alt="...">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END timeline item -->
                                    <div>
                                        <i class="far fa-clock bg-gray"></i>
                                    </div>
                                </div>

                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane active" id="modality">

                                <fieldset>
                                    <legend class=" mb-5 text-muted">Matriculado<a class="btn btn-outline-primary float-right mr-2" href="{{route('dashboard.studentgroup.index', ['student_id' => $student->id])}}">Nova Matricula</a></legend>

                                    <div class="row">

                                        @forelse($student->groups as $group)
                                        <div class="col-md-12">
                                            <div class="card card-dark">
                                                <div class="card-header">
                                                    <h5 class="">{{$group->name}}</h5>
                                                    <!-- /.card-tools -->
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body">

                                                    <div class="row">
                                                        <div class="col-md-12 d-flex justify-content-between">
                                                            <div class="col-md-5">
                                                                <div class="d-flex d-inline mt-4">
                                                                    <h5 class="d-flex d-inline text-muted mr-2">Modalidade: </h5><span class="border-bottom text-primary">{{$group->modality->name}}</span>
                                                                </div>

                                                                <div class="d-flex d-inline mt-2">
                                                                    <h5 class="d-flex d-inline text-muted mr-2">Valor: </h5><span class="border-bottom text-primary">R$ {{number_format($group->price, '2', ',', '.')}}</span>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">

                                                                </div>
                                                            </div>

                                                            <div class="col-md-7">
                                                                <h5>Horários</h5>
                                                                <ul class="list-group">

                                                                    <div @if($group->schedules->where('day_of_week', 'segunda')->count() == 0) hidden @endif>
                                                                        <li class="list-group-item d-flex justify-content-between align-items-center  border-top-0 border-right-0 border-left-0  border-bottom">
                                                                            Segunda-feira
                                                                            @forelse($group->schedules as $schedule)
                                                                            @if($schedule->day_of_week == 'segunda')

                                                                            <span class="text-muted">
                                                                                {{date('H:i', strtotime($schedule->start_time))}} até {{date('H:i', strtotime($schedule->end_time))}}
                                                                            </span>


                                                                            @endif
                                                                            @empty
                                                                            @endforelse
                                                                        </li>
                                                                    </div>

                                                                    <div @if($group->schedules->where('day_of_week', 'terca')->count() == 0) hidden @endif>
                                                                        <li class="list-group-item d-flex justify-content-between align-items-center border-top-0 border-right-0 border-left-0  border-bottom">
                                                                            Terça-feira
                                                                            @forelse($group->schedules as $schedule)
                                                                            @if($schedule->day_of_week == 'terca')

                                                                            <span class="text-muted">
                                                                                {{date('H:i', strtotime($schedule->start_time))}} até {{date('H:i', strtotime($schedule->end_time))}}
                                                                            </span>


                                                                            @endif
                                                                            @empty
                                                                            @endforelse
                                                                        </li>
                                                                    </div>

                                                                    <div @if($group->schedules->where('day_of_week', 'quarta')->count() == 0) hidden @endif>
                                                                        <li class="list-group-item d-flex justify-content-between align-items-center border-top-0 border-right-0 border-left-0  border-bottom">
                                                                            Quarta-feira
                                                                            @forelse($group->schedules as $schedule)
                                                                            @if($schedule->day_of_week == 'quarta')

                                                                            <span class="text-muted">
                                                                                {{date('H:i', strtotime($schedule->start_time))}} até {{date('H:i', strtotime($schedule->end_time))}}
                                                                            </span>


                                                                            @endif
                                                                            @empty
                                                                            @endforelse
                                                                        </li>
                                                                    </div>

                                                                    <div @if($group->schedules->where('day_of_week', 'quinta')->count() == 0) hidden @endif>
                                                                        <li class="list-group-item d-flex justify-content-between align-items-center border-top-0 border-right-0 border-left-0  border-bottom">
                                                                            Quinta-feira
                                                                            @forelse($group->schedules as $schedule)
                                                                            @if($schedule->day_of_week == 'quinta')

                                                                            <span class="text-muted">
                                                                                {{date('H:i', strtotime($schedule->start_time))}} até {{date('H:i', strtotime($schedule->end_time))}}
                                                                            </span>


                                                                            @endif
                                                                            @empty
                                                                            @endforelse
                                                                        </li>
                                                                    </div>

                                                                    <div @if($group->schedules->where('day_of_week', 'sexta')->count() == 0) hidden @endif>
                                                                        <li class="list-group-item d-flex justify-content-between align-items-center border-top-0 border-right-0 border-left-0  border-bottom">
                                                                            Sexta-feira
                                                                            @forelse($group->schedules as $schedule)
                                                                            @if($schedule->day_of_week == 'sexta')

                                                                            <span class="text-muted">
                                                                                {{date('H:i', strtotime($schedule->start_time))}} até {{date('H:i', strtotime($schedule->end_time))}}
                                                                            </span>


                                                                            @endif
                                                                            @empty
                                                                            @endforelse
                                                                        </li>
                                                                    </div>

                                                                    <div @if($group->schedules->where('day_of_week', 'sabado')->count() == 0) hidden @endif>
                                                                        <li class="list-group-item d-flex justify-content-between align-items-center border-top-0 border-right-0 border-left-0  border-bottom">
                                                                            Sábado-feira
                                                                            @forelse($group->schedules as $schedule)
                                                                            @if($schedule->day_of_week == 'sabado')

                                                                            <span class="text-muted">
                                                                                {{date('H:i', strtotime($schedule->start_time))}} até {{date('H:i', strtotime($schedule->end_time))}}
                                                                            </span>


                                                                            @endif
                                                                            @empty
                                                                            @endforelse
                                                                        </li>
                                                                    </div>
                                                                </ul>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <form class="text-right mt-5" action="{{route('dashboard.studentgroup.update', ['group_id' => $group->id, 'studentgroup' => $student->id])}}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit" class="btn btn-danger btn-sm">
                                                            <i class="fas fa-trash">
                                                            </i>
                                                            Cancelar
                                                        </button>
                                                    </form>
                                                    <!-- <a href="#" class="small-box-footer" data-toggle="modal" data-target="#modal{{$group->id}}">
                                                        Mais informações <i class="fas fa-arrow-circle-right"></i>
                                                    </a> -->
                                                </div>
                                                <!-- /.card-body -->
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                        @empty
                                        @endforelse
                                    </div>
                                </fieldset>
                                <blockquote class="quote-danger ml-n3">
                                    <h4 class="text-dark">Turmas</h4>
                                </blockquote>



                                <div class="row">
                                    @forelse($groups as $group)
                                    <div class="col-md-6">
                                        <div class="card card-dark">
                                            <div class="card-header">
                                                <h3 class="card-title">{{$group->name}}</h3>
                                                <div class="text-right">
                                                    @if($group->students->count() < $group->num_students)
                                                        <span class="badge badge-warning">{{$group->num_students - $group->students->count()}} Vaga(s)</span>
                                                        @else
                                                        <span class="badge badge-danger">Tuma Completa</span>
                                                        @endif
                                                </div>
                                                <!-- /.card-tools -->
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <label for="">Mensalidade:</label> R$ {{number_format($group->price, '2', ',', '.')}}
                                                <br>
                                                <label for="">Vagas:</label> {{$group->num_students - $group->students->count()}} Vaga(s) aberta(s)
                                                <br>
                                                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#modal{{$group->id}}">
                                                    Mais informações <i class="fas fa-arrow-circle-right"></i>
                                                </a>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                    @empty
                                    <h3>
                                        Não há Turmas
                                    </h3>
                                    @endforelse
                                </div>

                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

@forelse($groups as $gModal)
<!-- Modals -->
<div class="modal fade" id="modal{{$gModal->id}}" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h4>Quadro de horario - {{$gModal->name}}</h4>

                <!--  <h4 class="modal-title">Nome da Modalidade</h4>-->
                <!--  
                            <blockquote class="modal-title quote-danger ml-n3">
                                <h4 class="text-dark">Marcação das aulas</h4>
                            </blockquote>-->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-4">
                        <div class="list-group" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action active" hidden id="apresentation-list{{$gModal->id}}" data-toggle="list" href="#apresentation{{$gModal->id}}" role="tab" aria-controls="apresentação">Apresentação</a>
                            <a class="list-group-item list-group-item-action" id="monday-list{{$gModal->id}}" data-toggle="list" href="#monday{{$gModal->id}}" role="tab" aria-controls="monday" @if($gModal->schedules->where('day_of_week', 'segunda')->count() == 0) hidden @endif>Segunda-feira<span class="badge badge-warning right ml-5 mr-n5">{{$gModal->schedules->where('day_of_week', 'segunda')->count()}}</span></a>
                            <a class="list-group-item list-group-item-action" id="tuesday-list{{$gModal->id}}" data-toggle="list" href="#tuesday{{$gModal->id}}" role="tab" aria-controls="tuesday" @if($gModal->schedules->where('day_of_week', 'terca')->count() == 0) hidden @endif>Terça-feira<span class="badge badge-warning right ml-5 mr-n5">{{$gModal->schedules->where('day_of_week', 'terca')->count()}}</span></a>
                            <a class="list-group-item list-group-item-action" id="wednesday-list{{$gModal->id}}" data-toggle="list" href="#wednesday{{$gModal->id}}" role="tab" aria-controls="wednesday" @if($gModal->schedules->where('day_of_week', 'quarta')->count() == 0) hidden @endif>Quarta-feira<span class="badge badge-warning right ml-5 mr-n5">{{$gModal->schedules->where('day_of_week', 'quarta')->count()}}</span></a>
                            <a class="list-group-item list-group-item-action" id="thursday-list{{$gModal->id}}" data-toggle="list" href="#thursday{{$gModal->id}}" role="tab" aria-controls="thursday" @if($gModal->schedules->where('day_of_week', 'quinta')->count() == 0) hidden @endif>Quinta-feira<span class="badge badge-warning right ml-5 mr-n5">{{$gModal->schedules->where('day_of_week', 'quinta')->count()}}</span></a>
                            <a class="list-group-item list-group-item-action" id="friday-list{{$gModal->id}}" data-toggle="list" href="#friday{{$gModal->id}}" role="tab" aria-controls="friday" @if($gModal->schedules->where('day_of_week', 'sexta')->count() == 0) hidden @endif>Sexta-feira<span class="badge badge-warning right ml-5 mr-n5">{{$gModal->schedules->where('day_of_week', 'sexta')->count()}}</span></a>
                            <a class="list-group-item list-group-item-action" id="saturday-list{{$gModal->id}}" data-toggle="list" href="#saturday{{$gModal->id}}" role="tab" aria-controls="saturday" @if($gModal->schedules->where('day_of_week', 'sabado')->count() == 0) hidden @endif>Sábado<span class="badge badge-warning right ml-5 mr-n5">{{$gModal->schedules->where('day_of_week', 'sabado')->count()}}</span></a>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="tab-content" id="nav-tabContent">

                            <div class="tab-pane fade show active" id="apresentation{{$gModal->id}}" role="tabpanel" aria-labelledby="monday-list{{$gModal->id}}">

                                <div class="col-md-12 text-center">
                                    <img class="img-fluid img-responsive cover" src="{{asset('storage/' . $gModal->modality->photo)}}" style="width: 40%; height: ;">
                                </div>
                            </div>

                            <div class="tab-pane fade" id="monday{{$gModal->id}}" role="tabpanel" aria-labelledby="monday-list{{$gModal->id}}">


                                <blockquote>
                                    <h4 class="text-dark">Segunda</h4>
                                </blockquote>
                                @if($schedules->contains($gModal->id))

                                @forelse($schedules as $schedule)

                                @if($schedule->day_of_week == 'segunda' && $schedule->group_id == $gModal->id)
                                <ul class="mt-3">
                                    <li>
                                        <ul>
                                            <li> {{date('H:i', strtotime($schedule->start_time))}} -- {{date('H:i', strtotime($schedule->end_time))}} - Professor: {{$schedule->teacher->name}}</li>
                                        </ul>
                                    </li>
                                </ul>
                                @endif

                                @empty

                                <ul class="mt-3">
                                    <li>
                                        <h5>Sem registro</h5>
                                    </li>
                                </ul>
                                @endforelse
                                @endif
                            </div>

                            <div class="tab-pane fade" id="tuesday{{$gModal->id}}" role="tabpanel" aria-labelledby="tuesday-list{{$gModal->id}}">
                                <blockquote>
                                    <h4 class="text-dark">Terça</h4>
                                </blockquote>
                                @if($schedules->contains($gModal->id))
                                @forelse($schedules as $schedule)

                                @if($schedule->day_of_week == 'terca' && $schedule->group_id == $gModal->id)
                                <ul class="mt-3">
                                    <li>
                                        <ul>
                                            <li> {{date('H:i', strtotime($schedule->start_time))}} -- {{date('H:i', strtotime($schedule->end_time))}} - Professor: {{$schedule->teacher->name}}</li>
                                        </ul>
                                    </li>
                                </ul>
                                @endif

                                @empty

                                <ul class="mt-3">
                                    <li>
                                        <h5>Sem registro</h5>
                                    </li>
                                </ul>
                                @endforelse
                                @endif
                            </div>

                            <div class="tab-pane fade" id="wednesday{{$gModal->id}}" role="tabpanel" aria-labelledby="wednesday-list{{$gModal->id}}">
                                <blockquote>
                                    <h4 class="text-dark">Quarta</h4>
                                </blockquote>
                                @if($schedules->contains($gModal->id))
                                @forelse($schedules as $schedule)

                                @if($schedule->day_of_week == 'quarta' && $schedule->group_id == $gModal->id)
                                <ul class="mt-3">
                                    <li>
                                        <ul>
                                            <li> {{date('H:i', strtotime($schedule->start_time))}} -- {{date('H:i', strtotime($schedule->end_time))}} - Professor: {{$schedule->teacher->name}}</li>
                                        </ul>
                                    </li>
                                </ul>
                                @endif

                                @empty

                                <ul class="mt-3">
                                    <li>
                                        <h5>Sem registro</h5>
                                    </li>
                                </ul>
                                @endforelse
                                @endif
                            </div>

                            <div class="tab-pane fade" id="thursday{{$gModal->id}}" role="tabpanel" aria-labelledby="thursday-list{{$gModal->id}}">
                                <blockquote>
                                    <h4 class="text-dark">Quinta</h4>
                                </blockquote>
                                @if($schedules->contains($gModal->id))
                                @forelse($schedules as $schedule)

                                @if($schedule->day_of_week == 'quinta' && $schedule->group_id == $gModal->id)
                                <ul class="mt-3">
                                    <li>
                                        <ul>
                                            <li> {{date('H:i', strtotime($schedule->start_time))}} -- {{date('H:i', strtotime($schedule->end_time))}} - Professor: {{$schedule->teacher->name}}</li>
                                        </ul>
                                    </li>
                                </ul>
                                @endif

                                @empty

                                <ul class="mt-3">
                                    <li>
                                        <h5>Sem registro</h5>
                                    </li>
                                </ul>
                                @endforelse
                                @endif
                            </div>

                            <div class="tab-pane fade" id="friday{{$gModal->id}}" role="tabpanel" aria-labelledby="friday-list{{$gModal->id}}">
                                <blockquote>
                                    <h4 class="text-dark">Sexta</h4>
                                </blockquote>
                                @if($schedules->contains($gModal->id))
                                @forelse($schedules as $schedule)

                                @if($schedule->day_of_week == 'sexta' && $schedule->group_id == $gModal->id)
                                <ul class="mt-3">
                                    <li>
                                        <ul>
                                            <li> {{date('H:i', strtotime($schedule->start_time))}} -- {{date('H:i', strtotime($schedule->end_time))}} - Professor: {{$schedule->teacher->name}}</li>
                                        </ul>
                                    </li>
                                </ul>
                                @endif

                                @empty

                                <ul class="mt-3">
                                    <li>
                                        <h5>Sem registro</h5>
                                    </li>
                                </ul>
                                @endforelse
                                @endif
                            </div>

                            <div class="tab-pane fade" id="saturday{{$gModal->id}}" role="tabpanel" aria-labelledby="saturday-list{{$gModal->id}}">
                                <blockquote>
                                    <h4 class="text-dark">Sábado</h4>
                                </blockquote>
                                @if($schedules->contains($gModal->id))
                                @forelse($schedules as $schedule)

                                @if($schedule->day_of_week == 'sabado' && $schedule->group_id == $gModal->id)
                                <ul class="mt-3">
                                    <li>
                                        <ul>
                                            <li> {{date('H:i', strtotime($schedule->start_time))}} -- {{date('H:i', strtotime($schedule->end_time))}} - Professor: {{$schedule->teacher->name}}</li>
                                        </ul>
                                    </li>
                                </ul>
                                @endif

                                @empty

                                <ul class="mt-3">
                                    <li>
                                        <h5>Sem registro</h5>
                                    </li>
                                </ul>
                                @endforelse
                                @endif
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <a class="btn btn-primary" href="{{route('dashboard.studentgroup.create', ['group_id' => $gModal->id, 'student_id' => $student->id])}}">Matricular</a>
                <form action="{{route('dashboard.studentgroup.update', ['group_id' => $gModal->id, 'studentgroup' => $student->id])}}" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-danger btn-sm">
                        <i class="fas fa-trash">
                        </i>
                        Cancelar Matricula
                    </button>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@empty
<div class="text-center">
    <h5>Sem Turmas cadastradas</h5>
</div>
@endforelse

@endsection