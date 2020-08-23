@extends('layouts.app')

@section('content')
<div class="row">
    <div id="accordion" class="col-md-11 ml-3">
        <!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
        <div class="card card-primary">
            <div class="card-header" for='collapseMonday'>
                <h4 class="card-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseMonday" class="collapsed" aria-expanded="false">
                        Segunda
                    </a>
                </h4>
            </div>
            <div class="col-md-6">
                <div id="collapseMonday" class="panel-collapse in collapse" style="">
                    <blockquote>
                        Horário disponiveis
                    </blockquote>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">13:30 - 14:30</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <div class="card card-danger">
            <div class="card-header">
                <h4 class="card-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTuesday" class="collapsed" aria-expanded="false">
                        Terça
                    </a>
                </h4>
            </div>
            <div id="collapseTuesday" class="panel-collapse collapse">
                <div class="card-body">
                    Horarios Disponiveis para terça-feira
                </div>
            </div>
        </div>

        <div class="card card-lime">
            <div class="card-header">
                <h4 class="card-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseWednesday" class="collapsed" aria-expanded="false">
                        Quarta
                    </a>
                </h4>
            </div>
            <div id="collapseWednesday" class="panel-collapse collapse">
                <div class="card-body">
                    Listagem de Horarios para Quarta
                </div>
            </div>
        </div>

        <div class="card card-purple">
            <div class="card-header">
                <h4 class="card-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThursday" class="collapsed" aria-expanded="false">
                        Quinta
                    </a>
                </h4>
            </div>
            <div id="collapseThursday" class="panel-collapse collapse">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                    3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                    laborum
                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                    nulla
                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                    nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                    beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                    labore sustainable VHS.
                </div>
            </div>
        </div>

        <div class="card card-warning">
            <div class="card-header">
                <h4 class="card-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFriday" class="collapsed" aria-expanded="false">
                        Sexta
                    </a>
                </h4>
            </div>
            <div id="collapseFriday" class="panel-collapse collapse">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                    3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                    laborum
                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                    nulla
                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                    nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                    beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                    labore sustainable VHS.
                </div>
            </div>
        </div>

        <div class="card card-success">
            <div class="card-header">
                <h4 class="card-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseSaturday" class="collapsed" aria-expanded="false">
                        Sábado
                    </a>
                </h4>
            </div>
            <div id="collapseSaturday" class="panel-collapse collapse">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                    3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                    laborum
                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee
                    nulla
                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                    nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                    beer
                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
                    labore sustainable VHS.
                </div>
            </div>
        </div>
    </div>
</div>

@endsection