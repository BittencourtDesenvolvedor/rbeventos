@extends('layouts.main')
@section('title', 'Novo Evento')
@section('body')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie seu evento</h1>
    <form action="{{route('event.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Imagem:</label>
            <input type="file" class="form-control-file" id="image" name="image"">
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento...">
        </div>
        <div class="form-group">
            <label for="city">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Cidade do evento...">
        </div>
        <div class="form-group">
            <label for="private">O evento é público ou privado?</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Descrição:</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>
        <input type="submit" value="Criar Evento" class="btn btn-success">
    </form>
</div>
    
@endsection