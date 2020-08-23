@extends('layouts.app')

@section('content')

<!-- /.content-header -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 ">

                <!-- Profile Image -->
                <div class="card card-purple card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            @if($teacher->photo)
                            <img alt="Avatar" class="materialboxed img-rounded img-circle rounded-black img-fluid img-responsive" src="{{asset('storage/' . $teacher->photo)}}" style="width: 80%; height:160px;">
                            @else
                            <img alt="Avatar" class="materialboxed img-rounded img-circle profile-user-img img-fluid img-responsive" src="{{asset('storage/assets/no-photo.jpg')}}" style="width: 80%; height:160px ;">
                            @endif
                        </div>

                        <h3 class="profile-username text-center">{{$teacher->name}}</h3>

                        <!--<p class="text-muted text-center">00{{$teacher->id}} </p> -->

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
                            <li class="nav-item"><a class="nav-link active" href="#teacherDate" data-toggle="tab">Dados do Professor</a></li>
                            <li class="nav-item"><a class="nav-link" href="#modality" data-toggle="tab">Matricula</a></li>
                            <li class="nav-item"><a class="nav-link" href="#payment" data-toggle="tab">Histórico de pagamentos</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">

                            <!-- teacherDate dados do aluno -->
                            <div class="tab-pane active" id="teacherDate">
                                <div class="card-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row mb-3">

                                                    <div class="col-md-6">
                                                        <strong><i class="fas fa-user mr-1 mb-3"></i> Nome</strong>
                                                        <p class="text-muted ml-3">{{$teacher->name}}</p>
                                                        <hr>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <strong><i class="far fa-id-card mr-1 mb-3"></i> RG</strong>
                                                        <p class="text-muted ml-3">{{$teacher->rg}}</p>
                                                        <hr>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <strong><i class="far fa-address-card mr-1 mb-3"></i> CPF</strong>
                                                        <p class="text-muted ml-3">{{$teacher->cpf}}</p>
                                                        <hr>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">

                                                    <div class="col-md-6">
                                                        <strong><i class="fas fa-at mr-1 mb-3"></i> Email</strong>
                                                        <p class="text-muted ml-3">{{$teacher->email}}</p>
                                                        <hr>
                                                    </div>

                                                    <div class="col-md-3 mt-2">
                                                        <strong><i class="ion-social-whatsapp mr-1"></i> Telefone</strong>
                                                        <p class="text-muted ml-4">{{$teacher->phone}}</p>
                                                        <hr>
                                                    </div>

                                                    <div class="col-md-3 mt-2">
                                                        <strong><i class="far fa-calendar-alt mr-1 mb-2"></i> Data de nascimento</strong>
                                                        <p class="text-muted ml-3">{{date('d / m / Y', strtotime($teacher->date_birth))}}</p>
                                                        <hr>
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-12">

                                                        <strong><i class="far fa-clipboard mr-1"></i> Nota de Observação</strong>
                                                        <p class="text-muted callout callout-warning elevation-0 ml-2 mt-2">{{$teacher->obs}}</p>
                                                        <hr>

                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-md-6">

                                                        <strong><i class="fas fa-map-marked-alt mr-1 mb-3"></i> CEP</strong>
                                                        <p class="text-muted ml-3">{{$teacher->cep}}</p>
                                                        <hr>

                                                    </div>

                                                    <div class="col-md-6">
                                                        <strong><i class="fas fa-map-marked-alt mr-1 mb-3"></i> Rua</strong>
                                                        <p class="text-muted ml-3">{{$teacher->street}}</p>
                                                        <hr>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <strong><i class="fas fa-map-marked-alt mr-1 mb-3"></i> Bairro</strong>
                                                        <p class="text-muted ml-3">{{$teacher->neighborhood}}</p>
                                                        <hr>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <strong><i class="fas fa-map-marked-alt mr-1 mb-3"></i> Cidade</strong>
                                                        <p class="text-muted ml-3">{{$teacher->city}}</p>
                                                        <hr>
                                                    </div>

                                                    <div class="col-md-2">
                                                        <strong><i class="fas fa-map-marked-alt mr-1 mb-3"></i> Estado</strong>
                                                        <p class="text-muted ml-3">{{$teacher->state}}</p>
                                                        <hr>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="text-center">
                                    <a href="{{route('dashboard.teachers.edit', ['teacher' => $teacher->id])}}" class="btn btn-primary w-75 elevation-2">Editar</a>
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
                            <div class="tab-pane" id="modality">
                                <blockquote class="quote-danger ml-n3">
                                    <h4 class="text-dark">Modalidades</h4>
                                </blockquote>

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="card card-danger">
                                            <div class="card-header">
                                                <h3 class="card-title">Ginastica Funcional</h3>
                                                <!-- /.card-tools -->
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <label for="">Mensalidade:</label> R$ 80,00
                                                <br>
                                                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#modal-lg">
                                                    Mais informações <i class="fas fa-arrow-circle-right"></i>
                                                </a>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>

                                    <div class="col-md-3">
                                        <div class="card card-purple">
                                            <div class="card-header">
                                                <h3 class="card-title">Dança</h3>
                                                <!-- /.card-tools -->
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <label for="">Mensalidade:</label> R$ 80,00
                                                <br>
                                                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#modal-lg">
                                                    Mais informações <i class="fas fa-arrow-circle-right"></i>
                                                </a>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>

                                    <div class="col-md-3">
                                        <div class="card card-primary">
                                            <div class="card-header">
                                                <h3 class="card-title">Karatê</h3>
                                                <!-- /.card-tools -->
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <label for="">Mensalidade:</label> R$ 80,00
                                                <br>
                                                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#modal-lg">
                                                    Mais informações <i class="fas fa-arrow-circle-right"></i>
                                                </a>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>

                                    <div class="col-md-3">
                                        <div class="card card-success">
                                            <div class="card-header">
                                                <h3 class="card-title">Psicologia</h3>
                                                <!-- /.card-tools -->
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <label for="">Mensalidade:</label> R$ 80,00
                                                <br>
                                                <a href="#" class="small-box-footer" data-toggle="modal" data-target="#modal-lg">
                                                    Mais informações <i class="fas fa-arrow-circle-right"></i>
                                                </a>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
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

<!-- Modals -->
<div class="modal fade" id="modal-lg" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h4>Quadro de horario</h4>
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
                            <a class="list-group-item list-group-item-action active" id="monday-list" data-toggle="list" href="#monday" role="tab" aria-controls="monday">Segunda-feira<span class="badge badge-warning right ml-5 mr-n5">2 Vagas</span></a>
                            <a class="list-group-item list-group-item-action" id="tuesday-list" data-toggle="list" href="#tuesday" role="tab" aria-controls="tuesday">Terça-feira</a>
                            <a class="list-group-item list-group-item-action" id="wednesday-list" data-toggle="list" href="#wednesday" role="tab" aria-controls="wednesday">Quarta-feira</a>
                            <a class="list-group-item list-group-item-action" id="thursday-list" data-toggle="list" href="#thursday" role="tab" aria-controls="thursday">Quinta-feira</a>
                            <a class="list-group-item list-group-item-action" id="friday-list" data-toggle="list" href="#friday" role="tab" aria-controls="friday">Sexta-feira</a>
                            <a class="list-group-item list-group-item-action" id="saturday-list" data-toggle="list" href="#saturday" role="tab" aria-controls="settings">Sábado</a>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="monday" role="tabpanel" aria-labelledby="monday-list">
                                <blockquote>
                                    <h4 class="text-dark">Segunda</h4>
                                </blockquote>
                            </div>
                            <div class="tab-pane fade" id="tuesday" role="tabpanel" aria-labelledby="tuesday-list">
                                <blockquote>
                                    <h4 class="text-dark">Terça</h4>
                                </blockquote>
                            </div>
                            <div class="tab-pane fade" id="wednesday" role="tabpanel" aria-labelledby="wednesday-list">
                                <blockquote>
                                    <h4 class="text-dark">Quarta</h4>
                                </blockquote>
                            </div>
                            <div class="tab-pane fade" id="thursday" role="tabpanel" aria-labelledby="thursday-list">
                                <blockquote>
                                    <h4 class="text-dark">Quinta</h4>
                                </blockquote>
                            </div>
                            <div class="tab-pane fade" id="friday" role="tabpanel" aria-labelledby="friday-list">
                                <blockquote>
                                    <h4 class="text-dark">Sexta</h4>
                                </blockquote>
                            </div>
                            <div class="tab-pane fade" id="saturday" role="tabpanel" aria-labelledby="saturday-list">
                                <blockquote>
                                    <h4 class="text-dark">Sábado</h4>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Salvar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

@endsection