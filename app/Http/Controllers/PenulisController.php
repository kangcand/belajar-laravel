<?php

namespace App\Http\Controllers;

use App\Models\Penulis;
use Illuminate\Http\Request;

class PenulisController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $penulis = Penulis::orderBy('id', 'desc')->get();
        return view('penulis.index', compact('penulis'));
    }

    public function create()
    {
        return view('penulis.create');
    }

    public function store(Request $request)
    {
        // membuat validasi data
        $validated = $request->validate([
            'nama_penulis' => 'required|max:255',
            'bio' => 'required',
        ]);

        $penulis = new Penulis();
        $penulis->nama_penulis = $request->nama_penulis;
        $penulis->bio = $request->bio;
        $penulis->save();

        return redirect()->route('penulis.index')
            ->with('success', 'data berhasil ditambahkan');
    }

    public function show($id)
    {
        $penulis = Penulis::findOrFail($id);
        return view('penulis.show', compact('penulis'));
    }

    public function edit($id)
    {
        $penulis = Penulis::findOrFail($id);
        return view('penulis.edit', compact('penulis'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_penulis' => 'required|max:255',
            'bio' => 'required',
        ]);

        $penulis = Penulis::findOrFail($id);
        $penulis->nama_penulis = $request->nama_penulis;
        $penulis->bio = $request->bio;
        $penulis->save();

        return redirect()->route('penulis.index')
            ->with('success', 'data berhasil di ubah');
    }

    public function destroy($id)
    {
        $penulis = Penulis::findOrFail($id);
        $penulis->delete();

        return redirect()->route('penulis.index')
            ->with('success', 'data berhasil di hapus');
    }
}
