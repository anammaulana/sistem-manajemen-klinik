@extends('layouts.app')

@section('content')
    <div class="card"
        style="background-color: white; padding: 30px; margin: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-radius: 12px;">
        <div style="margin-bottom: 25px;">
            <h2 style="margin: 0;">Detail Pemeriksaan</h2>
            <p style="color: #555;">Informasi lengkap tentang pemeriksaan</p>
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
        <div style="display: flex; gap: 40px;">
            <!-- Kolom Kiri -->
            <div style="flex: 1; display: flex; flex-direction: column; gap: 20px;">
                <div>
                    <label for="id_pemeriksaan" style="font-weight: 300;">No. Pemeriksaan</label>
                    <input type="text" name="id_pemeriksaan" id="id_pemeriksaan" class="form-control"
                        value="{{ $pemeriksaan->id_pemeriksaan }}" readonly
                        style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;" />
                </div>

                <div>
                    <label for="nama_dokter" style="font-weight: 300;">Nama Dokter</label>
                    <input type="text" name="nama_dokter" id="nama_dokter" class="form-control"
                        value="{{ $pemeriksaan->dokter->nama ?? '-' }}" readonly
                        style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;" />
                </div>

                <div>
                    <label for="keluhan" style="font-weight: 300;">Keluhan</label>
                    <textarea name="keluhan" id="keluhan" class="form-control" rows="4" readonly
                        style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;">{{ $pemeriksaan->keluhan }}</textarea>
                </div>

                <div>
                    <label for="resep_obat" style="font-weight: 300;">Resep Obat</label>
                    <textarea name="resep_obat" id="resep_obat" class="form-control" rows="4" readonly
                        style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;">{{ $pemeriksaan->resep_obat }}</textarea>
                </div>
            </div>

            <!-- Kolom Kanan -->
            <div style="flex: 1; display: flex; flex-direction: column; gap: 20px;">
                <div>
                    <label for="nama_pasien" style="font-weight: 300;">Nama Pasien</label>
                    <input type="text" name="nama_pasien" id="nama_pasien" class="form-control"
                        value="{{ $pemeriksaan->pasien->nama ?? '-' }}" readonly
                        style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;" />
                </div>

                <div>
                    <label for="tanggal_periksa" style="font-weight: 300;">Tanggal Pemeriksaan</label>
                    <input type="date" name="tanggal_periksa" id="tanggal_periksa" class="form-control"
                        value="{{ $pemeriksaan->tanggal_periksa }}" readonly
                        style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;" />
                </div>

                <div>
                    <label for="diagnosa" style="font-weight: 300;">Diagnosa</label>
                    <textarea name="diagnosa" id="diagnosa" class="form-control" rows="4" readonly
                        style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;">{{ $pemeriksaan->diagnosa }}</textarea>
                </div>
            </div>
        </div>
    </div>
@endsection