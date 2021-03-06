@extends('layouts.main')

@section('title', 'Romulo Events')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um Evento</h1>
    <form action="/" method="GET">
        <input type="text" id="search" class="form-control" name="search" placeholder="Procurar">
    </form>
</div>
<div id="events-container" class="col-md-12">
    @if($search)
        <h2>Buscando por: {{$search}}</h2>
    @else
        <h2>Próximos Eventos</h2>
    @endif
    
    <p class="subtitle">Veja os eventos dos próximos dias</p>
    <div id="cards-containers" class="row">
        @foreach($events as $event)
        <div class="card col-md-3">
            <img src="/img/events/{{$event->image}}" alt="{{$event->title}}">
            <div class="card-body">
                <div class="card-date">{{date('d/m/Y', strtotime($event->date))}}</div>
                <h5 class="card-title">{{$event->title}}</h5>
                <p class="card-participants">{{count($event->users)}} Participante(s)</p>
                <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber Mais</a>
            </div>
        </div>
        @endforeach
        @if(count($events)==0)
        <p>Não há eventos disponíveis</p>
        @endif
    </div>
    @if($search)
        <form action="/">
            <input type="submit" value="Voltar para o Início" class="btn btn-primary">
        </form>
    @endif
</div>


@endsection