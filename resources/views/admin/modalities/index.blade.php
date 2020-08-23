@extends('layouts.app')


@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="">

    <br>
    <!-- Content Header (Page header) -->
    <div class="content-header callout callout-info ml-3 mr-3">
        <h1>
            Modalidades
        </h1>
        <hr>
        <a href="{{route('dashboard.modalities.create')}}" class="btn btn-info text-white elevation-2 col-3" style="text-decoration: none">
            <i class="fas fa-plus ml-n5 mr-3"></i>Novo Modalidade
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

                            <th style="width: 15%;" >
                                Id
                            </th>

                            <th style="width: 20%;" >
                                Foto
                            </th>

                            <th>
                                Nome
                            </th>


                            <th style="width: 20%;" class="text-center">
                                Ações
                            </th>

                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($modalities as $modality)
                        <tr>

                            <td>
                                {{$modality->id}}
                            </td>

                            <td class="">
                                @if($modality->photo)
                                <img alt="Avatar" class="materialboxed img-rounded img-fluid img-responsive" src="{{asset('storage/' . $modality->photo)}}" style="width: 80px; height:80px ;">
                                @else
                                <img alt="Avatar" class="materialboxed img-fluid img-rounded img-responsive" src="{{asset('storage/assets/no-photo.jpg')}}" style="width: 80px; height:80px ;">
                                @endif
                            </td>

                            <td>
                                {{$modality->name}}
                            </td>

                            <td class="project-actions form-inline">

                                <a class="btn btn-warning text-white btn-sm mr-1" href="{{route('dashboard.modalities.edit', ['modality' => $modality->id])}}">
                                    <i class="fa fa-edit">
                                    </i>
                                    Editar
                                </a>

                                <form action="{{route('dashboard.modalities.destroy', ['modality' => $modality->id])}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash">
                                        </i>
                                        Deletar
                                    </button>
                                </form>

                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="container">
                                <div class="col-md-12 text-center">
                                    <h4>Não existe modalidade cadastrada... <i class="fa fa-ghost"></i> </h4>
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
            {{$modalities->links()}}
        </nav>
    </section>



</div>
<!-- /.content-wrapper -->

@endSection