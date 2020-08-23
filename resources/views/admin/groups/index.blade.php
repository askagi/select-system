@extends('layouts.app')


@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="">

    <br>
    <!-- Content Header (Page header) -->
    <div class="content-header callout callout-info ml-3 mr-3">
        <h1>
            Turmas / Grupos
        </h1>
        <hr>
        <a href="{{route('dashboard.groups.create')}}" class="btn btn-info text-white elevation-2 col-3" style="text-decoration: none">
            <i class="fa fa-user-plus ml-n5 mr-3"></i>Novo Grupo
        </a>

    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content fixed">
        <!-- Default box -->
        <div class="card ml-2 mr-2">
            <div class="card-header callout callout-info elevation-0">
                <div class="card-title col-md-6">


                </div>
            </div>

            <div class="card-body p-0">
                <table class="table table-striped projects container-fluid">
                    <thead class="">
                        <tr>

                            <th>
                                Id
                            </th>

                            <th>
                                Modalidade
                            </th>

                            <th>
                                Nome
                            </th>

                            <th>
                                Sala
                            </th>

                            <th>
                                Professores
                            </th>

                            <th>
                                Lotação máxima
                            </th>

                            <th>
                                Valor Mensal
                            </th>

                            <th>
                                Data de Cadastro
                            </th>

                            <th style="width: 20%;" class="text-center">
                                Ações
                            </th>

                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($groups as $group)
                        <tr>
                            <td>
                                {{$group->id}}
                            </td>

                            <td class="">
                                {{$group->modality->name}}
                            </td>

                            <td>
                                {{$group->name}}
                            </td>

                            <td>
                                {{$group->local}}
                            </td>

                            <td>
                                @foreach($group->teachers as $g)
                                {{$g->name}}
                                @endforeach
                            </td>

                            <td>
                                {{$group->num_students}}
                            </td>

                            <td>
                                {{number_format($group->price, '2', ',', '.') }}
                            </td>

                            <td>
                                {{date('d/m/Y', strtotime($group->created_at))}}
                            </td>

                            <td class="project-actions text-center">

                                <a class="btn btn-info btn-sm w-50 mb-2" href="{{route('dashboard.groups.show', ['group' => $group->id])}}">
                                    <i class="far fa-eye">
                                    </i>
                                    Detalhes
                                </a>

                                <!-- <form action="{{route('dashboard.groups.destroy', ['group' => $group->id])}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm w-50">
                                        <i class="fas fa-trash">
                                        </i>
                                        Deletar
                                    </button>
                                </form> -->

                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="container">
                                <div class="col-md-12 text-center">
                                    <h4>Nada encontrado! <i class="fa fa-ghost"></i> </h4>
                                    <a href="{{route('dashboard.groups.index')}}" class="btn btn-primary col-md-6"><i class="fa fa-redo-alt"> Atualizar</i></a>
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
        <!-- /.content -->
        <nav>
            {{$groups->links()}}
        </nav>
    </section>



</div>
<!-- /.content-wrapper -->

@endSection

@section('javaScript')
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="../materialize/js/materialize.min.js"></script>
@endsection