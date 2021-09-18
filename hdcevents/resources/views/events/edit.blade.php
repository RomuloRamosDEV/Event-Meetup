@extends('layouts.main')

@section('title', 'Editar Evento')

@section('content')

<div id="event-create-container" class="col-md-6  formcamp">
    <h1>Editando: {{$event->title}}</h1>
    <form action="/events/update/{{$event->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="image">Imagem do Evento:</label>
           <input type="file" id="image" name="image" class="form-control-file">
           <img src="/img/events/{{$event->image}}" alt="" class="img-preview">
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento" value="{{$event->title}}">
        </div>
        <div class="form-group">
            <label for="date">Data do Evento:</label>
            <input type="date" class="form-control" id="date" name="date" placeholder="" value="{{$event->date->format('Y-m-d')}}">
        </div>
        <div class="form-group">
            <label for="city">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Nome da Cidade" value="{{$event->city}}">
        </div>
        <div class="form-group">
            <label for="description">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer neste evento?">{{$event->description}}</textarea>
        </div>
        <div class="form-group">
            <label for="private">O Evento é Privado?</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1" {{$event->private == 1 ? "selected='selected'" : ""}}>Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="items[]">Itens de Infraestrutura</label>
            <div class="form-group">
               <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
            </div>
            <div class="form-group">
               <input type="checkbox" name="items[]" value="Brindes"> Brindes
            </div>
            <div class="form-group">
               <input type="checkbox" name="items[]" value="Bebida-Gratis"> Bebida Grátis
            </div>
            <div class="form-group">
               <input type="checkbox" name="items[]" value="Online"> Online Opcional
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Editar Evento">
    </form>
</div>

@endsection