@extends('layouts.main')
@section('title', 'Home')
@section('body')

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="/" method="GET">
       
        <input name="search" id="search" class="form-control" placeholder="Buscar...">
    </form>
</div>
<div id="events-container" class="col-md-12">
    @if($search)
        <h2>Procurando por {{ $search }}</h2>
    @else
        <h2>Eventos</h2>
        <p class="subtitle">Nossos Eventos</p>
    @endif

    <div id="cards-container" class="row">
        @foreach ($events as $event)
           <div class="card col-md-3">
               <img src="img/events/{{$event->image}}" alt="{{$event->title}}">
               <div class="card-body">
                 <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                 <h5 class="card-title">{{$event->title}}</h5>
                 <p class="card-participantes">X Participantes</p>
                 <a href="/events/{{$event->id}}" class="btn btn-success">Saber Mais</a>
               </div>
           </div> 
        @endforeach
        @if(count($events) == 0 && $search)
            <p>Evento não encontrado! <a href="/">Ver todos</a></p>
        @elseif(count($events) == 0)

            <p>Não há eventos disponíveis</p>
        @endif
    </div>
</div>


    
@endsection