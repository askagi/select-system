<section class="content ml-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-11">
                <div class="card card-primary mt-3">
                    <blockquote class="quote-purple">
                        <h3 class="text-dark">Cadastro de Alunos</h3>
                    </blockquote>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{route('dashboard.students.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="name">Nome</label><span class="text-danger">*</span>
                                                    <input type="text" name="student[name]" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Preencha o nome completo" value="{{old('name')}}">
                                                    @error('name')
                                                    <div class="invalid-feedback">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="rg">RG</label><span class="text-danger">*</span>
                                                    <input type="text" name="student[rg]" class="form-control @error('rg') is-invalid @enderror" id="rg" placeholder="RG">
                                                    @error('rg')
                                                    <div class="invalid-feedback">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="cpf">CPF</label><span class="text-danger">*</span>
                                                    <input type="text" name="student[cpf]" class="form-control @error('cpf') is-invalid @enderror" id="cpf" placeholder="CPF">
                                                    @error('cpf')
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
                                                    <label for="date">Data de nascimento</label><span class="text-danger">*</span>
                                                    <input type="date" name="student[date_birth]" class="form-control @error('date_birth') is-invalid @enderror" id="date" placeholder="data de nascimento">
                                                    @error('date_birth')
                                                    <div class="invalid-feedback">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="phone">Telefone/Whatsapp</label><span class="text-danger">*</span>
                                                    <input type="text" name="student[phone]" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="Telefone celular">
                                                    @error('phone')
                                                    <div class="invalid-feedback">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email">Email</label><span class="text-danger">*</span>
                                                    <input type="email" name="student[email]" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email@email.com">
                                                    @error('email')
                                                    <div class="invalid-feedback">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="photo">Adicionar foto</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" name="photo" class="custom-file-input" id="photo">
                                                            <label class="custom-file-label" for="photo">Clique aqui para carregar foto</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="obs">Observações</label>
                                                    <textarea class="form-control" id="obs" name="student[obs]" rows="1" placeholder="Observações importantes sobre o aluno..."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <blockquote class="quote-warning ml-n3">
                                            <h4 class="text-dark">Endereço</h4>
                                        </blockquote>

                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="cep">CEP</label><span class="text-danger">*</span>
                                                    <input type="text" name="address[cep]" class="form-control @error('cep') is-invalid @enderror" id="cep" placeholder="CEP">
                                                    @error('cep')
                                                    <div class="invalid-feedback">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="street">Rua</label><span class="text-danger">*</span>
                                                    <input type="text" name="address[street]" class="form-control @error('street') is-invalid @enderror" id="street" placeholder="Rua">
                                                    @error('street')
                                                    <div class="invalid-feedback">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="neigh">Bairro</label><span class="text-danger">*</span>
                                                    <input type="text" name="address[neighborhood]" class="form-control @error('neighborhood') is-invalid @enderror" id="neigh" placeholder="Bairro">
                                                    @error('neighborhood')
                                                    <div class="invalid-feedback">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="city">Cidade</label><span class="text-danger">*</span>
                                                    <input type="text" name="address[city]" class="form-control @error('city') is-invalid @enderror" id="city" value="Santo Antonio de Jesus" placeholder="Cidade">
                                                    @error('city')
                                                    <div class="invalid-feedback">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label for="state">Estado</label><span class="text-danger">*</span>
                                                    <input type="text" name="address[state]" class="form-control @error('state') is-invalid @enderror" id="state" value="Ba" placeholder="Ex: Ba">
                                                    @error('state')
                                                    <div class="invalid-feedback">
                                                        {{$message}}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <blockquote class="quote-danger ml-n3">
                                            <h4 class="text-dark">Modalidades</h4>
                                        </blockquote>

                                        <div class="row">
                                            @foreach($modalities as $modality)
                                            <div class="col-md-4">

                                                <div class="card card-danger">
                                                    <div class="card-header">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="{{$modality->id}}" id="{{$modality->name}}">
                                                            <label class="card-title" for="{{$modality->name}}">{{$modality->name}}</label>
                                                            <!-- /.card-tools -->
                                                        </div>
                                                    </div>
                                                    <!-- /.card-header -->
                                                    <div class="card-body">
                                                        <label for="">Mensalidade:</label> R$ {{$modality->price}}
                                                        <br>
                                                        <p> @php echo nl2br($modality->description) @endphp</p>
                                                        <a href="#" class="small-box-footer" data-toggle="modal" data-target="#modal-lg">
                                                            Hórarios <i class="fas fa-arrow-circle-right"></i>
                                                        </a>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.card -->

                                            </div>
                                            @endforeach
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
            </div>

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
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>