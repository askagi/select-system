@extends('layouts.app')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Cadastro de Alunos</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="card card-purple card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="{{asset('AdminLTE/dist/img/user4-128x128.jpg')}}" alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">{{$student->name}}</h3>
                        <!-- <p class="text-muted text-center">modalidades</p> -->


                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Idade</b> <a class="float-right">
                                    {{Date('Y') - Date('Y', strtotime($student->date_birth))}}
                                </a>
                            </li>
                            <!--
                            <li class="list-group-item">
                                <b>Altura</b> <a class="float-right">1,67</a>
                            </li>
                            <li class="list-group-item">
                                <b>Massa corporal</b> <a class="float-right">69 Kg</a>
                            </li>  -->


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
                            <li class="nav-item"><a class="nav-link active" href="#payment" data-toggle="tab">Histórico de pagamentos</a></li>
                            <li class="nav-item"><a class="nav-link" href="#modality" data-toggle="tab">Modalidades</a></li>
                            <li class="nav-item"><a class="nav-link" href="#studentDate" data-toggle="tab">Dados do Aluno</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="payment">

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

                            <!-- studentDate dados do aluno -->
                            <div class="tab-pane" id="studentDate">
                                <form role="form" action="{{route('dashboard.students.update', ['student' => $student->id])}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Nome</label>
                                                                <input type="text" value="{{$student->name}}" name="student[name]" class="form-control" id="exampleInputEmail1" placeholder="Preencha o nome completo">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">RG</label>
                                                                <input type="text" value="{{$student->rg}}" name="student[rg]" class="form-control" id="exampleInputEmail1" placeholder="RG">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">CPF</label>
                                                                <input type="text" value="{{$student->cpf}}" name="student[cpf]" class="form-control" id="exampleInputEmail1" placeholder="CPF">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Data de nascimento</label>
                                                                <input type="date" value="{{$student->date_birth}}" name="student[date_birth]" class="form-control" id="exampleInputEmail1" placeholder="Telefone celular">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Telefone/Whatsapp</label>
                                                                <input type="text" value="{{$student->phone}}" name="student[phone]" class="form-control" id="exampleInputEmail1" placeholder="Telefone celular">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Email</label>
                                                                <input type="email" value="{{$student->email}}" name="student[email]" class="form-control" id="exampleInputEmail1" placeholder="Email@email.com">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputFile">Adicionar foto</label>
                                                                <div class="input-group">
                                                                    <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" id="exampleInputFile">
                                                                        <label class="custom-file-label" for="exampleInputFile">Clique aqui para carregar foto</label>
                                                                    </div>
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text" id="">Foto</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Observações</label>
                                                                <textarea class="form-control" value="{{$student->obs}}" name="student[obs]" rows="1" placeholder="Observações importantes sobre o aluno..."> {{$student->obs}} </textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <blockquote class="quote-warning ml-n3">
                                                        <h4 class="text-dark">Endereço</h4>
                                                    </blockquote>

                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">CEP</label>
                                                                <input type="text" value="{{$student->address->cep}}" name="address[cep]" class="form-control" id="exampleInputEmail1" placeholder="CEP">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Rua</label>
                                                                <input type="text" value="{{$student->address->street}}" name="address[street]" class="form-control" id="exampleInputEmail1" placeholder="Rua">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Bairro</label>
                                                                <input type="text" value="{{$student->address->neighborhood}}" name="address[neighborhood]" class="form-control" id="exampleInputEmail1" placeholder="Bairro">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Cidade</label>
                                                                <input type="text" value="{{$student->address->city}}" name="address[city]" class="form-control" id="exampleInputEmail1" value="Santo Antonio de Jesus" placeholder="Cidade">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Estado</label>
                                                                <input type="text" value="{{$student->address->state}}" name="address[state]" class="form-control" id="exampleInputEmail1" value="Ba" placeholder="Ex: Ba">
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer text-center">
                                        <button type="submit" class="btn btn-primary w-25 elevation-2">Matricular</button>
                                    </div>
                                </form>
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