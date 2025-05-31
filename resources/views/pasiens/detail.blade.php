@extends('layouts.app')

@section('content')
<div class="card" style="background-color: white; padding: 30px; margin: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-radius: 12px;">

    <div style="margin-bottom: 25px;">
        <h2 style="margin: 0;">Detail Pasien</h2>
        <p style="color: #555;">Detail Data Pasien</p>
    </div>

    <div style="display: flex; gap: 40px;">
        <!-- Kolom Kiri -->
        <div style="flex: 1; display: flex; flex-direction: column; gap: 20px;">
            <div>
                <label style="font-weight: 600; color: #333;">No. Pasien</label>
                <p style="margin: 6px 0 0; padding: 10px; background: #f9f9f9; border-radius: 8px; border: 1px solid #ccc;">{{ $pasien->id_pasien }}</p>
            </div>

            <div>
                <label style="font-weight: 600; color: #333;">Tanggal Lahir</label>
                <p style="margin: 6px 0 0; padding: 10px; background: #f9f9f9; border-radius: 8px; border: 1px solid #ccc; position: relative;">
                    {{ \Carbon\Carbon::parse($pasien->tanggal_lahir)->format('d M Y') }}
                    <i class="fas fa-calendar-alt" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); color: #888;"></i>
                </p>
            </div>

            <div>
                <label style="font-weight: 600; color: #333;">Alamat</label>
                <p style="margin: 6px 0 0; padding: 10px; background: #f9f9f9; border-radius: 8px; border: 1px solid #ccc; white-space: pre-line;">{{ $pasien->alamat }}</p>
            </div>
        </div>

        <!-- Kolom Kanan -->
        <div style="flex: 1; display: flex; flex-direction: column; gap: 20px;">
            <div>
                <label style="font-weight: 600; color: #333;">Nama Lengkap</label>
                <p style="margin: 6px 0 0; padding: 10px; background: #f9f9f9; border-radius: 8px; border: 1px solid #ccc;">{{ $pasien->nama }}</p>
            </div>

            <div>
                <label style="font-weight: 600; color: #333;">Jenis Kelamin</label>
                <p style="margin: 6px 0 0; padding: 10px; background: #f9f9f9; border-radius: 8px; border: 1px solid #ccc;">{{ $pasien->jenis_kelamin }}</p>
            </div>

            <div>
                <label style="font-weight: 600; color: #333;">No. Telepon</label>
                <p style="margin: 6px 0 0; padding: 10px; background: #f9f9f9; border-radius: 8px; border: 1px solid #ccc;">{{ $pasien->no_telepon }}</p>
            </div>
        </div>
    </div>

</div>
@endsection
