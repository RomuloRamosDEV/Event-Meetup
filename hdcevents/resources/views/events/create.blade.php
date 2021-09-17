@extends('layouts.main')

@section('title', 'Criar Eventos')

@section('content')

<div id="event-create-container" class="col-md-6  formcamp">
    <h1>Crie o seu evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Imagem do Evento:</label>
           <input type="file" id="image" name="image" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
        </div>
        <div class="form-group">
            <label for="date">Data do Evento:</label>
            <input type="date" class="form-control" id="date" name="date" placeholder="">
        </div>
        <div class="form-group">
            <label for="city">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Nome da Cidade">
        </div>
        <div class="form-group">
            <label for="description">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer neste evento?"></textarea>
        </div>
        <div class="form-group">
            <label for="private">O Evento é Privado?</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
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
        <input type="submit" class="btn btn-primary" value="Criar Evento">
    </form>
</div>

@endsection