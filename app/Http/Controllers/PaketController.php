<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index()
    {
        $paket = Paket::all();
        return view('paket.index', compact('paket'));
    }

    public function create()
    {
        return view('paket.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
            'itinerary' => 'required',
            'foto' => 'nullable|image'
        ]);

        $foto = null;
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('paket', 'public');
        }

        Paket::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'itinerary' => $request->itinerary,
            'foto' => $foto
        ]);

        return redirect()->route('paket.index');
    }

    public function show(Paket $paket)
    {
        return view('paket.show', compact('paket'));
    }

    public function edit(Paket $paket)
    {
        return view('paket.edit', compact('paket'));
    }

    public function update(Request $request, Paket $paket)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
            'itinerary' => 'required',
            'foto' => 'nullable|image'
        ]);

        $foto = $paket->foto;

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('paket', 'public');
        }

        $paket->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'itinerary' => $request->itinerary,
            'foto' => $foto
        ]);

        return redirect()->route('paket.index');
    }

    public function destroy(Paket $paket)
    {
        if ($paket->foto) {
            unlink(public_path('storage/' . $paket->foto));
        }

        $paket->delete();
        return redirect()->route('paket.index');
    }
}
