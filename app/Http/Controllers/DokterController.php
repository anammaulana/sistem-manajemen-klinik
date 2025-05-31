<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all doctors from the database
        $dokters = Dokter::all();

        // Return the view with the list of doctors
        return view('dokters.index', compact('dokters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return the view to create a new doctor
        return view('dokters.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate and create a new doctor
        $validatedData = $request->validate([
            'id_dokter' => 'required|unique:dokters,id_dokter|max:255',
            'nama' => 'required|string|max:255',
            'spesialisasi' => 'required|string|max:255',
            'no_str' => 'required|unique:dokters,no_str',
            'jadwal_praktik' => 'required|string|max:255',
        ]);

        Dokter::create($validatedData);

        return redirect()->route('dokters.index')->with('success', 'Dokter berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Fetch the doctor by ID
        $dokter = Dokter::findOrFail($id);

        // Return the view with the doctor details
        return view('dokters.detail', compact('dokter'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Fetch the doctor by ID
        $dokter = Dokter::findOrFail($id);

        // Return the view with the doctor data
        return view('dokters.edit', compact('dokter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Fetch the doctor by ID
        $dokter = Dokter::findOrFail($id);

        // Validate and update the doctor data
        $validatedData = $request->validate([
            'id_dokter' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'spesialisasi' => 'required|string|max:255',
            'no_str' => 'required|unique:dokters,no_str,' . $dokter->id_dokter . ',id_dokter',
            'jadwal_praktik' => 'required|string|max:255',
        ]);

        $dokter->update($validatedData);

        return redirect()->route('dokters.index')->with('success', 'Dokter berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Fetch the doctor by ID
        $dokter = Dokter::findOrFail($id);

        // Delete the doctor
        $dokter->delete();

        return redirect()->route('dokters.index')->with('success', 'Dokter berhasil dihapus.');
    }
}
