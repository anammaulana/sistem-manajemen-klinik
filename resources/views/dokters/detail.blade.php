@extends('layouts.app')

@section('content')
    <div class="card" style="background-color: white; padding: 30px; margin: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-radius: 12px;">

        <div style="margin-bottom: 25px;">
            <h2 style="margin: 0;">Detail Dokter</h2>
            <p style="color: #555;">Detail Data Dokter</p>
        </div>


            <div style="display: flex; gap: 40px;">
                <!-- Kolom Kiri -->
                <div style="flex: 1; display: flex; flex-direction: column; gap: 20px;">
                <div>
                    <label style="font-weight: 600; color: #333;">No. Dokter</label>
                    <p style="margin: 6px 0 0; padding: 10px; background: #f9f9f9; border-radius: 8px; border: 1px solid #ccc;">{{ $dokter->id_dokter }}</p>
                </div>

                <div>
                    <label style="font-weight: 600; color: #333;">Spesialisasi</label>
                    <p style="margin: 6px 0 0; padding: 10px; background: #f9f9f9; border-radius: 8px; border: 1px solid #ccc; ">
                        {{ $dokter->spesialisasi }}</p>
                </div>
                <div>
                    <label style="font-weight: 600; color: #333;">Jadwal Praktik</label>
                    <p style="margin: 6px 0 0; padding: 10px; background: #f9f9f9; border-radius: 8px; border: 1px solid #ccc; position: relative;">
                        {{ \Carbon\Carbon::parse($dokter->jadwal_praktik)->format('d M Y') }}
                        <i class="fas fa-calendar-alt" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%); color: #888;"></i>
                    </p>
                </div>

                </div>

                <!-- Kolom Kanan -->
                <div style="flex: 1; display: flex; flex-direction: column; gap: 20px;">
                <div>
                <label style="font-weight: 600; color: #333;">Nama Lengkap</label>
                <p style="margin: 6px 0 0; padding: 10px; background: #f9f9f9; border-radius: 8px; border: 1px solid #ccc;">{{ $dokter->nama }}</p>
            </div>
            <div><label style="font-weight: 600; color: #333;">No. STR</label>
            <p style="margin: 6px 0 0; padding: 10px; background: #f9f9f9; border-radius: 8px; border: 1px solid #ccc;">
                {{ $dokter->no_str }}</p>
            </div>
                </div>
            </div>

@endsection
