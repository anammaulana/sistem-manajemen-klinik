@extends('layouts.app')

@section('content')
<div class="card" style="background-color: white; padding: 30px; margin: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-radius: 12px;">

    <div style="margin-bottom: 25px;">
        <h2 style="margin: 0;">Edit Dokter</h2>
        <p style="color: #555;">Form Edit Dokter</p>
    </div>

    <form action="{{ route('dokters.update', $dokter->id_dokter) }}" method="POST">
        @csrf
        @method('PUT')

        <div style="display: flex; gap: 40px;">
            <!-- Kolom Kiri -->
            <div style="flex: 1; display: flex; flex-direction: column; gap: 20px;">
                <div>
                    <label for="id_dokter" style="font-weight: 300; margin-bottom: 6px; display: block;">No. Dokter</label>
                    <input type="text" name="id_dokter" id="id_dokter" class="form-control"
                        value="{{ old('id_dokter', $dokter->id_dokter) }}"
                        style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;" readonly />
                </div>

                <div>
                    <label for="spesialisasi" style="font-weight: 300; margin-bottom: 6px; display: block;">Spesialisasi</label>
                    <input type="text" name="spesialisasi" id="spesialisasi" class="form-control"
                        value="{{ old('spesialisasi', $dokter->spesialisasi) }}"
                        style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;" />
                </div>

                <div>
                    <label for="jadwal_praktik" style="font-weight: 300; margin-bottom: 6px; display: block;">Jadwal Praktik</label>
                    <div style="position: relative;">
                        <input type="date" name="jadwal_praktik" id="jadwal_praktik" class="form-control"
                            value="{{ old('jadwal_praktik', $dokter->jadwal_praktik) }}"
                            style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;" />
                        <i class="fas fa-calendar-alt" style="position: absolute; right: 10px; top: 12px; color: #888;"></i>
                    </div>
                </div>
            </div>

            <!-- Kolom Kanan -->
            <div style="flex: 1; display: flex; flex-direction: column; gap: 20px;">
                <div>
                    <label for="nama" style="font-weight: 300; margin-bottom: 6px; display: block;">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" class="form-control"
                        value="{{ old('nama', $dokter->nama) }}"
                        style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;" />
                </div>

                <div>
                    <label for="no_str" style="font-weight: 300; margin-bottom: 6px; display: block;">No. STR</label>
                    <input type="text" name="no_str" id="no_str" class="form-control"
                        value="{{ old('no_str', $dokter->no_str) }}"
                        style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;" />
                </div>
            </div>
        </div>

        <!-- Tombol -->
        <div style="display: flex; justify-content: flex-end; gap: 10px; margin-top: 30px;">
            <a href="{{ route('dokters.index') }}" class="btn"
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
