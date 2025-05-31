@extends('layouts.app')

@section('content')
    <div class="card"
        style="background-color: white; padding: 30px; margin: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-radius: 12px;">

        <div style="margin-bottom: 25px;">
            <h2 style="margin: 0;">Tambah Pemeriksaan</h2>
            <p style="color: #555;">Form Tambah Pemeriksaan</p>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('pemeriksaans.store') }}" method="POST">
            @csrf

            <div style="display: flex; gap: 40px;">
                <!-- Kolom Kiri -->
                <div style="flex: 1; display: flex; flex-direction: column; gap: 20px;">

                    <div>
                        <label for="id_pemeriksaan" style="font-weight: 300; margin-bottom: 6px; display: block;">No.
                            Pemeriksaan</label>
                        <input type="text" name="id_pemeriksaan" id="id_pemeriksaan" class="form-control"
                            style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;" />
                    </div>

                    <div>
                        <label for="id_dokter" style="font-weight: 300; margin-bottom: 6px; display: block;">Nama
                            Dokter</label>
                        <select name="id_dokter" id="id_dokter" class="form-control"
                            style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;">
                            <option value="">-- Pilih Dokter --</option>
                            @foreach($dokters as $dokter)
                                <option value="{{ $dokter->id_dokter }}">{{ $dokter->nama }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="keluhan" style="font-weight: 300; margin-bottom: 6px; display: block;">Keluhan</label>
                        <textarea name="keluhan" id="keluhan" class="form-control" rows="4"
                            style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc; resize: vertical;"></textarea>
                    </div>

                    <div>
                        <label for="resep_obat" style="font-weight: 300; margin-bottom: 6px; display: block;">Resep
                            Obat</label>
                        <textarea name="resep_obat" id="resep_obat" class="form-control" rows="4"
                            style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc; resize: vertical;"></textarea>
                    </div>

                </div>

                <!-- Kolom Kanan -->
                <div style="flex: 1; display: flex; flex-direction: column; gap: 20px;">

                    <div>
                        <label for="id_pasien" style="font-weight: 300; margin-bottom: 6px; display: block;">Nama
                            Pasien</label>
                        <select name="id_pasien" id="id_pasien" class="form-control"
                            style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;">
                            <option value="">-- Pilih Pasien --</option>
                            @foreach($pasiens as $pasien)
                                <option value="{{ $pasien->id_pasien }}">{{ $pasien->nama }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="tanggal_periksa" style="font-weight: 300; margin-bottom: 6px; display: block;">Tanggal
                            Pemeriksaan</label>
                        <input type="date" name="tanggal_periksa" id="tanggal_periksa" class="form-control"
                            style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;" />
                    </div>

                    <div>
                        <label for="diagnosa" style="font-weight: 300; margin-bottom: 6px; display: block;">Diagnosa</label>
                        <textarea name="diagnosa" id="diagnosa" class="form-control" rows="4"
                            style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc; resize: vertical;"></textarea>
                    </div>
                </div>
            </div>

            <!-- Tombol -->
            <div style="display: flex; justify-content: flex-end; gap: 10px; margin-top: 30px;">
                <a href="{{ route('pemeriksaans.index') }}" class="btn"
                    style="padding: 10px 20px; background-color: red; color: white; border-radius: 6px; text-decoration: none; font-size: 18px;">
                    Batal
                </a>
                <button type="submit" class="btn btn-primary"
                    style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 6px; font-size: 18px;">
                    Simpan
                </button>
            </div>
        </form>
    </div>
@endsection