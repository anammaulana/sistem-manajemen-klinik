<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all medicines from the database
        $obats = Obat::all();

        // Return the view with the list of medicines
        return view('obat.index', compact('obats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return the view to create a new medicine
        return view('obat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate and create a new medicine
        $validatedData = $request->validate([
            'id_obat' => 'required|string|max:255|unique:obats,id_obat',
            'nama_obat' => 'required|string|max:255',
            'dosis' => 'required|string|max:255',
            'stok' => 'required|integer|min:0',
        ]);

        Obat::create($validatedData);

        return redirect()->route('obat.index')->with('success', 'Obat berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Fetch the medicine by ID
        $obat = Obat::findOrFail($id);

        // Return the view with the medicine details
        return view('obat.show', compact('obat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Fetch the medicine by ID
        $obat = Obat::findOrFail($id);

        // Return the view with the medicine data
        return view('obat.edit', compact('obat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Fetch the medicine by ID
        $obat = Obat::findOrFail($id);

        // Validate and update the medicine data
        $validatedData = $request->validate([
            'id_obat' => 'required|string|max:255|unique:obats,id_obat,' . $obat->id_obat,
            'nama_obat' => 'required|string|max:255',
            'dosis' => 'required|string|max:255',
            'stok' => 'required|integer|min:0',
        ]);

        $obat->update($validatedData);

        return redirect()->route('obat.index')->with('success', 'Obat berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Fetch the medicine by ID
        $obat = Obat::findOrFail($id);

        // Delete the medicine
        $obat->delete();

        return redirect()->route('obat.index')->with('success', 'Obat berhasil dihapus.');
    }
}
