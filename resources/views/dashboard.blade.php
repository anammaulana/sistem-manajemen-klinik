@extends('layouts.app')

@section('content')
    <div class="card" style="background-color: white; height: auto; padding: 20px; margin: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-radius: 8px;">

        <div style="margin-bottom: 20px;">
            <h2>Dashboard</h2>
        </div>

    {{-- Statistik Section --}}
    <div style="display: flex; gap: 20px; margin-bottom: 30px;">
    <div style="flex: 1; background-color: white; padding: 15px 20px; border-radius: 10px; display: flex; align-items: center; justify-content: space-between; box-shadow: 0 2px 8px rgba(0,0,0,0.05);"> 
        <div>
            <div style="font-size: 14px; ">Total Pasien</div>
            <div style="font-size: 30px; font-weight: bold; padding-top: 10px;">{{ $totalPasien }}</div>
        </div>
        <div style="background-color: #d9fce5; border-radius: 50%; width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
            <i class="fas fa-users" style="color: green;"></i>
        </div>
    </div>
    <div style="flex: 1; background-color: white; padding: 15px 20px; border-radius: 10px; display: flex; align-items: center; justify-content: space-between; box-shadow: 0 2px 8px rgba(0,0,0,0.05);"> 
        <div>
            <div style="font-size: 14px; ">Total Dokter</div>
            <div style="font-size: 30px; font-weight: bold; padding-top: 10px;">{{ $totalDokter }}</div>
        </div>
        <div style="background-color: #dcd6ff; border-radius: 50%; width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
            <i class="fas fa-users" style="color: #5b3ee7;"></i>
        </div>
    </div>

    <div style="flex: 1; background-color: white; padding: 15px 20px; border-radius: 10px; display: flex; align-items: center; justify-content: space-between; box-shadow: 0 2px 8px rgba(0,0,0,0.05);"> 
        <div>
            <div style="font-size: 14px; ">Pemeriksaan Hari Ini</div>
            <div style="font-size: 30px; font-weight: bold; padding-top: 10px;">{{ $totalPemeriksaan }}</div>
        </div>
        <div style="background-color: #ffe0e0; border-radius: 50%; width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
             <i class="fas fa-clipboard-list" style="color: #e53e3e; "></i>
        </div>
    </div>

    <div style="flex: 1; background-color: white; padding: 15px 20px; border-radius: 10px; display: flex; align-items: center; justify-content: space-between; box-shadow: 0 2px 8px rgba(0,0,0,0.05);"> 
        <div>
            <div style="font-size: 14px; ">Total Obat</div>
            <div style="font-size: 30px; font-weight: bold; padding-top: 10px;">{{ $totalObat }}</div>
        </div>
        <div style="background-color: #fff3b0; border-radius: 50%; width: 60px; height: 60px; display: flex; align-items: center; justify-content: center;">
             <i class="fas fa-pills" style="color: #e6a100; "></i>
        </div>
    </div>

    </div>

        <div style="margin-bottom: 20px;">
            <h2>Pemeriksaan Hari Ini</h2>
        </div>

        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="background-color: #f0f0f0;">
                    <th style="padding: 10px;">No</th>
                    <th style="padding: 10px;">Nama</th>
                    <th style="padding: 10px;">Spesialisasi</th>
                    <th style="padding: 10px;">Jadwal Praktik</th>
                    <th style="padding: 10px;">Action</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($dokters as $index => $dokter)
                <tr>
                    <td style="padding: 10px; text-align: center;">{{ $index + 1 }}</td>
                    <td style="padding: 10px; text-align: center;">{{ $dokter->nama }}</td>
                    <td style="padding: 10px; text-align: center;">{{ $dokter->id_dokter }}</td>
                    <td style="padding: 10px; text-align: center;">{{ $dokter->jadwal_praktik }}</td>
                    <!-- <td style="padding: 10px; text-align: center;">{{ $dokter->spesialisasi }}</td> -->
                    <td style="padding: 10px; text-align: center;">
                        <a href="{{ route('dokters.show', $dokter->id_dokter) }}">
                            <i class="fas fa-eye" style="margin-left: 10px; color:blue;"></i>
                        </a>
                        <a href="{{ route('dokters.edit', $dokter->id_dokter) }}">
                            <i class="fas fa-edit" style="margin-left: 10px; color: #e6a100;"></i>
                        </a>
                        <form action="{{ route('dokters.destroy', $dokter->id_dokter) }}" method="POST" style="display:inline;"
                            onsubmit="return confirm('Hapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit">
                                <i class="fas fa-trash-alt" style="margin-left: 10px; color: red;"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">Belum ada data dokter.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
