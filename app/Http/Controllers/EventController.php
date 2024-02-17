<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $search = request('search');
        if($search){
            $events = Event::where([
                ['title', 'like', '%' .$search. '%']
            ])->get();
        }else{
            $events = Event::all();
        }
      
        return view('index', ['events' => $events, 'search' => $search]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('events/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $event = new Event;
        $event->title = $request->title;
        $event->date = $request->date;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        $event->items = $request->items;

        if($event->title != "" && $event->city != ""){
            if($request->hasFile('image') != "" && $request->file('image')->isValid()){
                $requestImage = $request->image;
                $extension = $requestImage->extension();
                $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . "." . $extension;
                $requestImage->move(public_path('img/events'), $imageName);
                $event->image = $imageName;

                $event->save();
                return redirect('/events/create')->with('msg', 'Evento criado com sucesso!');
            }else{
                return redirect('/events/create')->with('error', 'Selecione uma imagem para o seu evento');
            }           
             
        }else{
            return redirect('/events/create')->with('error', 'Os campos com * são obrigatórios!');
        }

       
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('events/show', ['event' => $event]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
    }
}
