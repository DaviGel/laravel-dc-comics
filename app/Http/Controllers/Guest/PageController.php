<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Http\Requests\ComicRequest;
use App\Http\Requests\StoreComicRequest;
use App\Models\ComicsModel;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = ComicsModel::all();
        return view('comics.list', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(ComicsModel $comics)
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ComicRequest $request)
    {
        $data = $request->validated();
        $comic = new ComicsModel();

        // Metodo per popolare i campi a mano
        // $comic->title = $data['title'];
        // $comic->description = $data['description'];
        // $comic->thumb = $data['thumb'];
        // $comic->price = $data['price'];
        // $comic->series = $data['series'];
        // $comic->sale_date = $data['sale_date'];
        // $comic->type = $data['type'];
        // $comic->artists = $data['artists'];
        // $comic->writers = $data['writers'];

        // Metodo alternativo per popolare tutti i campi
        $comic->fill($data);
        $comic->save();
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(ComicsModel $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = ComicsModel::findOrFail($id);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ComicRequest $request, string $id)
    {
        $data = $request->validated();
        $comic = ComicsModel::findOrFail($id);
        $comic->update($data);
        return redirect()->route('comics.index', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comic = ComicsModel::findOrFail($id);
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
