<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        $pasiens = Pasien::all();
        return view('pasiens.index', compact('pasiens'));
    }

    public function create()
    {
        return view('pasiens.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_pasien' => 'required|unique:pasiens,id_pasien',
            'nama' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'no_telepon' => 'required|string',
        ]);

        Pasien::create($request->all());

        return redirect()->route('pasiens.index')->with('success', 'Data pasien berhasil ditambahkan');
    }

    public function show( $id)
    {
        $pasien = Pasien::findOrFail($id);
        return view('pasiens.detail', compact('pasien'));
    }

    public function edit(Pasien $pasien)
    {
        return view('pasiens.edit', compact('pasien'));
    }

    public function update(Request $request, Pasien $pasien)
    {
        $request->validate([
            'id_pasien' => 'required|unique:pasiens,id_pasien,' . $pasien->id_pasien . ',id_pasien',
            'nama' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'no_telepon' => 'required|string',
        ]);

        $pasien->update($request->all());

        return redirect()->route('pasiens.index')->with('success', 'Data pasien berhasil diupdate');
    }

    public function destroy(Pasien $pasien)
    {
        $pasien->delete();
        return redirect()->route('pasiens.index')->with('success', 'Data pasien berhasil dihapus');
    }
}
