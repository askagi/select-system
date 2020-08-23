@extends('layouts.app')

@section('content')

<section class="content">
    <div class="col-md-12">

        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Modalidade</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Horários</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($groups as $g)
                        <tr>
                            <th scope="row">{{$g->id}}</th>
                            <td>{{$g->modality->name}} </td>
                            <td>{{$g->name}}</td>

                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal{{$g->id}}">
                                    Horários
                                </button>
                            </td>
                        </tr>
                        @empty
                        <h4>Sem cadastro</h4>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>





        @forelse($groups as $gModal)
        <!-- Modal -->
        <div class="modal fade" id="modal{{$gModal->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{$gModal->name}} Modal de ID = {{$gModal->id}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">


                        <div class="row" @if($gModal->schedules->where('day_of_week', 'segunda')->count() == 0) hidden @endif>
                            <div class="col-md-12">
                                <ul class="mt-3">
                                    <h5>Segunda-Feira</h5>
                                    <hr>
                                    @forelse($gModal->schedules as $schedule)
                                    @if($schedule->day_of_week == 'segunda')
                                    <li class="ml-4">{{$schedule->start_time}} -- {{$schedule->end_time}} - Prof. {{$teachers->find($schedule->group_id)->name}}</li>

                                    @endif
                                    @empty
                                    @endforelse
                                </ul>
                            </div>
                        </div>


                        <div class="row" @if($gModal->schedules->where('day_of_week', 'terca')->count() == 0) hidden @endif>
                            <div class="col-md-12">

                                <ul class="mt-3">
                                    <h5>Terça-Feira</h5>
                                    <hr>
                                    @forelse($gModal->schedules as $schedule)
                                    @if($schedule->day_of_week == 'terca')
                                    <li class="ml-4">{{$schedule->start_time}} -- {{$schedule->end_time}} - Prof. {{$teachers->find($schedule->group_id)->name}}</li>
                                    @endif
                                    @empty
                                    @endforelse
                                </ul>
                            </div>
                        </div>

                        <div class="row" @if($gModal->schedules->where('day_of_week', 'quarta')->count() == 0) hidden @endif>
                            <div class="col-md-12">

                                <ul class="mt-3">
                                    <h5>Quarta-Feira</h5>
                                    <hr>
                                    @forelse($gModal->schedules as $schedule)
                                    @if($schedule->day_of_week == 'quarta')
                                    <li class="ml-4">{{$schedule->start_time}} -- {{$schedule->end_time}} - Prof. {{$teachers->find($schedule->group_id)->name}}</li>
                                    @endif
                                    @empty
                                    @endforelse
                                </ul>
                            </div>
                        </div>


                        <div class="row" @if($gModal->schedules->where('day_of_week', 'quinta')->count() == 0) hidden @endif>
                            <div class="col-md-12">

                                <ul class="mt-3">
                                    <h5>Quinta-Feira</h5>
                                    <hr>
                                    @forelse($gModal->schedules as $schedule)
                                    @if($schedule->day_of_week == 'quinta')
                                    <li class="ml-4">{{$schedule->start_time}} -- {{$schedule->end_time}} - Prof. {{$teachers->find($schedule->group_id)->name}}</li>
                                    @endif
                                    @empty
                                    @endforelse
                                </ul>
                            </div>
                        </div>


                        <div class="row" @if($gModal->schedules->where('day_of_week', 'sexta')->count() == 0) hidden @endif>
                            <div class="col-md-12">

                                <ul class="mt-3">
                                    <h5>Sexta-Feira</h5>
                                    <hr>
                                    @forelse($gModal->schedules as $schedule)
                                    @if($schedule->day_of_week == 'sexta')
                                    <li class="ml-4">{{$schedule->start_time}} -- {{$schedule->end_time}} - Prof. {{$teachers->find($schedule->group_id)->name}}</li>
                                    @endif
                                    @empty
                                    @endforelse
                                </ul>
                            </div>
                        </div>

                        <div class="row" @if($gModal->schedules->where('day_of_week', 'sabado')->count() == 0) hidden @endif>
                            <div class="col-md-12">

                                <ul class="mt-3">
                                    <h5>Sábado</h5>
                                    <hr>
                                    @forelse($gModal->schedules as $schedule)
                                    @if($schedule->day_of_week == 'sabado')
                                    <li class="ml-4">{{$schedule->start_time}} -- {{$schedule->end_time}} - Prof. {{$teachers->find($schedule->group_id)->name}}</li>
                                    @endif
                                    @empty
                                    @endforelse
                                </ul>
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        @empty

        <h5>Sem cadastro na agenda</h5>

        @endforelse

    </div>

</section>

@endsection