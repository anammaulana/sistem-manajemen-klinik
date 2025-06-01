<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Obat;
use App\Models\Pasien;
use App\Models\Pemeriksaan;
use Illuminate\Http\Request;

class PemeriksaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index(Request $request)
{
    $query = Pemeriksaan::query();

    if ($request->has('search') && $request->search != '') {
        $search = $request->search;

        $query->whereHas('pasien', function ($q) use ($search) {
            $q->where('nama', 'like', '%' . $search . '%');
        });
    }

    $pemeriksaans = $query->get();

    return view('pemeriksaan.index', compact('pemeriksaans'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dokters = Dokter::all();
        $pasiens = Pasien::all();
    
        // Return the view to create a new pemeriksaan
        return view('pemeriksaan.create', compact('dokters', 'pasiens'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate and create a new pemeriksaan
        $validatedData = $request->validate([
            'id_pemeriksaan' => 'required|string|max:255|unique:pemeriksaans,id_pemeriksaan',
            'id_pasien' => 'required|string|max:255|',
            'id_dokter' => 'required|string|max:255|',
            'resep_obat' => 'required|string|max:255',
            'tanggal_periksa' => 'required|date',
            'keluhan' => 'required|string|max:255',
            'diagnosa' => 'nullable|string|max:255',
        ]);
        // dd($validatedData);
        Pemeriksaan::create($validatedData);
        

        return redirect()->route('pemeriksaans.index')->with('success', 'Pemeriksaan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pemeriksaan = Pemeriksaan::with(['dokter', 'pasien'])->findOrFail($id);
        return view('pemeriksaan.detail', compact('pemeriksaan'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Fetch the pemeriksaan by ID
        $dokters = Dokter::all();
        $pasiens = Pasien::all();
        $pemeriksaan = Pemeriksaan::findOrFail($id);

        // Return the view with the pemeriksaan data
        return view('pemeriksaan.edit', compact('pemeriksaan', 'dokters', 'pasiens'));
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
            'resep_obat' => 'required|string|max:255',
            'id_pasien' => 'required|string|max:255',
            'id_dokter' => 'required|string|max:255',
            'tanggal_periksa' => 'required|date',
            'keluhan' => 'required|string|max:255',
            'diagnosa' => 'nullable|string|max:255',
        ]);
        // dd($validatedData);
        $pemeriksaan->update($validatedData);
        

        return redirect()->route('pemeriksaans.index')->with('success', 'Pemeriksaan berhasil diupdate.');
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
