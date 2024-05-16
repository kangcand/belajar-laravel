<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = Genre::latest()->get();
        return view('genre.index', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'nama_genre' => 'required|unique:genres',
        ]);

        $genre = new Genre();
        $genre->nama_genre = $request->nama_genre;
        $genre->save();

        return redirect()->route('genre.index')
            ->with('success', 'Data berhasil di tambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_genre' => 'required|unique:genres',
        ]);

        $genre = Genre::findOrFail($id);
        $genre->nama_genre = $request->nama_genre;
        $genre->save();

        return redirect()->route('genre.index')
            ->with('success', 'Data berhasil di ubah');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $genre = Genre::findOrFail($id);
        $genre->delete();
        return redirect()->route('genre.index')
            ->with('success', 'Data berhasil di hapus');

    }
}
