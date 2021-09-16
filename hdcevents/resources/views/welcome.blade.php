@extends('layouts.main')

@section('title', 'Romulo Events')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um Evento</h1>
    <form action="">
        <input type="text" id="search" class="form-control" name="search" placeholder="Procurar">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Próximos Eventos</h2>
    <p class="subtitle">Veja os eventos dos próximos dias</p>
    <div id="cards-containers" class="row">
        @foreach($events as $event)
        <div class="card col-md-3">
            <img src="/img/eventphp2.jpg" alt="{{$event->title}}">
            <div class="card-body">
                <div class="card-date">10/09/2021</div>
                <h5 class="card-title">{{$event->title}}</h5>
                <p class="card-participants">X Participantes</p>
                <a href="#" class="btn btn-primary">Saber Mais</a>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection