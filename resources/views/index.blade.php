@extends('layouts.main')
@section('title', 'Home')
@section('body')

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="" method="POST">
        @csrf
        <input name="search" id="search" class="form-control" placeholder="Buscar...">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Eventos</h2>
    <p class="subtitle">Nossos Eventos</p>
    <div id="cards-container" class="row">
        @foreach ($events as $event)
           <div class="card col-md-3">
               <img src="" alt="{{$event->title}}">
               <div class="card-body">
                 <p class="card-date">22/01/2024</p>
                 <h5 class="card-title">{{$event->title}}</h5>
                 <p class="card-participantes">X Participantes</p>
                 <a href="#" class="btn btn-success">Saber Mais</a>
               </div>
           </div> 
        @endforeach
    </div>
</div>


    
@endsection