@extends('layouts.app')


@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="">

    <br>
    <!-- Content Header (Page header) -->
    <div class="content-header callout callout-info ml-3 mr-3">
        <h1>
            Alunos
        </h1>
        <hr>
        <a href="{{route('dashboard.students.create')}}" class="btn btn-info text-white elevation-2 col-3" style="text-decoration: none">
            <i class="fa fa-user-plus ml-n5 mr-3"></i>Novo Aluno
        </a>

    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content fixed">
        <!-- Default box -->
        <div class="card ml-2 mr-2">
            <div class="card-header callout callout-info elevation-0">
                <div class="card-title col-md-6">
                    <form class="" action="{{route('dashboard.students.search')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="">
                            <div class="">
                                <div class="input-group">
                                    <input type="search" class=" form-control" name="search" id="search" @if($search ?? '' ) value="{{$search ?? ''}}" fo @endif>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-info" type="submit"><i class="fas fa-search secondary ml-3 mr-3"></i></button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card-body p-0">
                <table class="table table-striped projects container-fluid">
                    <thead class="">
                        <tr>

                            <th >
                                Id
                            </th>
                            <th>
                                Foto
                            </th>

                            <th >
                                Nome
                            </th>

                            <th >
                                Status
                            </th>

                            <th >
                                Data de Cadastro
                            </th>

                            <th style="width: 20%" class="text-center">
                                Ações
                            </th>

                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($students as $student)
                        <tr>
                            <td>
                                {{$student->id}}
                            </td>
                            <td class="">
                                @if($student->photo)
                                <img alt="Avatar" class="materialboxed img-rounded img-fluid img-responsive" src="{{asset('storage/' . $student->photo)}}" style="width: 80px; height:80px ;">
                                @else
                                <img alt="Avatar" class="materialboxed img-fluid img-rounded img-responsive" src="{{asset('storage/assets/no-photo.jpg')}}" style="width: 80px; height:80px ;">
                                @endif
                            </td>
                            <td>
                                {{$student->name}}
                            </td>

                            <td>
                                @if(!$student->deleted_at)
                                <span class="badge badge-success">Ativo</span>
                                @else
                                <span class="badge badge-danger">Desativo</span>
                                @endif
                            </td>

                            <td>
                                {{date('d/m/Y', strtotime($student->created_at))}}
                            </td>

                            <td class="project-actions text-center">

                                <a class="btn btn-info btn-sm w-50 mb-2" href="{{route('dashboard.students.show', ['student' => $student->id])}}">
                                    <i class="far fa-eye">
                                    </i>
                                    Detalhes
                                </a>

                                <!-- <form action="{{route('dashboard.students.destroy', ['student' => $student->id])}}" method="POST">
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
                            <td colspan="6" class="container">
                                <div class="col-md-12 text-center">
                                    <h4>Nada encontrado! <i class="fa fa-ghost"></i> </h4>
                                    <a href="{{route('dashboard.students.index')}}" class="btn btn-primary col-md-6"><i class="fa fa-redo-alt"> Atualizar</i></a>
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
            {{$students->links()}}
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