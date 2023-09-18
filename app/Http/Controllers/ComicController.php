<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Models\Comic;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validazioni sulla funzione store()

        $request ->validate([
            'thumb' => 'nullable|max:1024',
            'title' => 'required|max:64',
            'price' => 'required|numeric|min:1|max:1000',
            'series' => 'required|max:100',
            'type' => 'required|max:32',
            'sale_date' => 'required|date|after_or_equal:today',
            'artists' => 'nullable|string',
            'writers' => 'nullable|string',
            'description' => 'nullable|string'
        ],
        [
            'thumb.max' => "L'immagine può contenere al massimo 1024 caratteri!",
            'title.required' => 'Inserire il titolo è obbligatorio!',
            'title.max' => 'Inserire il titolo con massimo 64 caratteri!',
            'price.required' => 'Inserire il prezzo è obbligatorio!',
            'price.numeric' => 'Inserire il prezzo in valore numerico!',
            'price.min' => 'Inserire il prezzo con valore minimo di €1,00!',
            'price.max' => 'Inserire il prezzo con valore massimo di €1000,00!',
            'series.required' => 'Inserire la serie è obbligatorio!',
            'series.max' => 'Inserire una serie con massimo 100 caratteri!',
            'type.required' => 'Inserire il tipo è obbligatorio!',
            'type.max' => 'Inserire il tipo con massimo 32 caratteri!',
            'sale_date.required' => 'Inserire la data è obbligatorio!',
            'sale_date.date' => 'Inserire la data in valore numerico es.(GG/MM/AA) - (01/01/2021)!',
            'sale_date.after_or_equal' => 'Inserire la data corrente o prossima!'
        ]); 

        $formData = $request->all();

        $comic = new comic();
        $comic->thumb = $formData['thumb'];
        $comic->title = $formData['title'];
        $comic->price = $formData['price'];
        $comic->series = $formData['series'];
        $comic->type = $formData['type'];
        $comic->sale_date = $formData['sale_date'];
        $comic ->artists = $formData['artists'];
        $comic ->writers = $formData['writers'];
        $comic->description = $formData['description'];
        $comic->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::findOrFail($id);

        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::findOrFail($id);
        return view ('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Validazioni sulla funzione update()

        $request ->validate([
            'thumb' => 'nullable|max:1024',
            'title' => 'required|max:64',
            'price' => 'required|numeric|min:1|max:1000',
            'series' => 'required|max:100',
            'type' => 'required|max:32',
            'sale_date' => 'required|date',
            'artists' => 'nullable|string',
            'writers' => 'nullable|string',
            'description' => 'nullable|string'
        ],
        [
            'thumb.max' => "L'immagine può contenere al massimo 1024 caratteri!",
            'title.required' => 'Inserire il titolo è obbligatorio!',
            'title.max' => 'Inserire il titolo con massimo 64 caratteri!',
            'price.required' => 'Inserire il prezzo è obbligatorio!',
            'price.numeric' => 'Inserire il prezzo in valore numerico!',
            'price.min' => 'Inserire il prezzo con valore minimo di €1,00!',
            'price.max' => 'Inserire il prezzo con valore massimo di €1000,00!',
            'series.required' => 'Inserire la serie è obbligatorio!',
            'series.max' => 'Inserire una serie con massimo 100 caratteri!',
            'type.required' => 'Inserire il tipo è obbligatorio!',
            'type.max' => 'Inserire il tipo con massimo 32 caratteri!',
            'sale_date.required' => 'Inserire la data è obbligatorio!',
            'sale_date.date' => 'Inserire la data in valore numerico es.(GG/MM/AA) - (01/01/2021)!',
        ]);

        $comic = Comic::findOrFail($id);

        $formData = $request ->all();

        $comic->thumb = $formData['thumb'];
        $comic->title = $formData['title'];
        $comic->price = $formData['price'];
        $comic->series = $formData['series'];
        $comic->type = $formData['type'];
        $comic->sale_date = $formData['sale_date'];
        $comic ->artists = $formData['artists'];
        $comic ->writers = $formData['writers'];
        $comic->description = $formData['description'];
        $comic->save();

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comic = Comic::findOrFail($id);
        $comic ->delete();
        return redirect() ->route('comics.index');
    }
}
