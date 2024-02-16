@extends('layouts.main')
@section('title', 'Novo Evento')
@section('body')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie seu evento</h1>
    <form action="{{route('event.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">*Imagem:</label>
            <input type="file" class="form-control-file" id="image" name="image" placeholder="teste">            
            <p class="subtitleImg">Use imagens de 555 x 350px</p>
        </div>
        <div class="form-group">
            <label for="title">*Nome do Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento...">
        </div>
        <div class="form-group">
            <label for="date">*Data do Evento:</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="form-group">
            <label for="city">*Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Cidade do evento...">
        </div>
        <div class="form-group">
            <label for="private">O Evento é Público ou Privado?</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Público</option>
                <option value="1">Privado</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Descrição:</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="infraestrutura">Infraestrutura:</label>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Open Bar"> Open Bar
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value=" Fast Food"> Fast Food
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Palco"> Palco
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="Espaço Kids"> Espaço Kids
                    </div> 
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <input type="checkbox" name="items[]" value="CooffeBreak"> Cooffe Break
                    </div>
                </div>
            </div>          
        </div>
        <div class="d-grid gap-2 col-6 mx-auto mt-4">
            <input type="submit" value="Criar Evento" class="btn btn-success">
        </div>
    </form>
</div>
    
@endsection