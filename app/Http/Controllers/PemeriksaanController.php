<?php

namespace App\Http\Controllers;

use App\Models\Pemeriksaan;
use Illuminate\Http\Request;

class PemeriksaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all pemeriksaan records from the database
        // Assuming you have a Pemeriksaan model
        $pemeriksaans = Pemeriksaan::all();

        // Return the view with the list of pemeriksaan
        return view('pemeriksaan.index', compact('pemeriksaans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return the view to create a new pemeriksaan
        return view('pemeriksaan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate and create a new pemeriksaan
        $validatedData = $request->validate([
            'id_pemeriksaan' => 'required|string|max:255|unique:pemeriksaans,id_pemeriksaan',
            'id_pasien' => 'required|string|max:255',
            'id_dokter' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'keluhan' => 'required|string|max:255',
        ]);

        Pemeriksaan::create($validatedData);

        return redirect()->route('pemeriksaan.index')->with('success', 'Pemeriksaan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Fetch the pemeriksaan by ID
        $pemeriksaan = Pemeriksaan::findOrFail($id);

        // Return the view with the pemeriksaan details
        return view('pemeriksaan.show', compact('pemeriksaan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Fetch the pemeriksaan by ID
        $pemeriksaan = Pemeriksaan::findOrFail($id);

        // Return the view with the pemeriksaan data
        return view('pemeriksaan.edit', compact('pemeriksaan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Fetch the pemeriksaan by ID
        $pemeriksaan = Pemeriksaan::findOrFail($id);

        // Validate and update the pemeriksaan
        $validatedData = $request->validate([
            'id_pemeriksaan' => 'required|string|max:255|unique:pemeriksaans,id_pemeriksaan,' . $pemeriksaan->id_pemeriksaan . ',id_pemeriksaan',
            'id_pasien' => 'required|string|max:255',
            'id_dokter' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'keluhan' => 'required|string|max:255',
        ]);

        $pemeriksaan->update($validatedData);

        return redirect()->route('pemeriksaan.index')->with('success', 'Pemeriksaan berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Fetch the pemeriksaan by ID
        $pemeriksaan = Pemeriksaan::findOrFail($id);

        // Delete the pemeriksaan
        $pemeriksaan->delete();

        return redirect()->route('pemeriksaan.index')->with('success', 'Pemeriksaan berhasil dihapus.');
    }
}
