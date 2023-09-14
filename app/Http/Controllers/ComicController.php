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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function home()
    {
        return view('home');
    }

    public function contatti()
    {
        return view('contatti');
    }

    public function chi_siamo()
    {
        return view('chi_siamo');
    }

    public function documentazione()
    {
        return view('documentazione');
    }
}
