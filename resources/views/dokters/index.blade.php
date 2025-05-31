@extends('layouts.app')

@section('content')
    <div class="card" style="background-color: white; height: auto; padding: 20px; margin: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-radius: 8px;">

        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <div>
                <h2>Data Dokter</h2>
                <p>List data dokter.</p>
            </div>
           <div style="display: flex; gap: 10px;">
                <input type="text" placeholder="Cari dokter..." style="padding: 8px 12px; border: 1px solid #ccc; border-radius: 5px;">
                <a href="{{ route('dokters.create') }}" style="padding: 10px 15px; background-color: #007bff; color: white; text-decoration: none; border-radius: 5px;">
                     Tambah
                </a>
            </div>
        </div>

        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="background-color: #f0f0f0;">
                    <th style="padding: 10px; ">No</th>
                    <th style="padding: 10px; ">ID Dokter</th>
                    <th style="padding: 10px; ">Nama</th>
                    <th style="padding: 10px; ">Spesialisasi</th>
                    <th style="padding: 10px; ">Jadwal Praktik</th>
                    <th style="padding: 10px; ">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($dokters as $index => $dokter)
                    <tr>
                        <td style="padding: 10px; text-align: center;">{{ $index + 1 }}</td>
                        <td style="padding: 10px; text-align: center;">{{ $dokter->id_dokter }}</td>
                        <td style="padding: 10px; text-align: center;">{{ $dokter->nama }}</td>
                        <td style="padding: 10px; text-align: center;">{{ $dokter->spesialisasi }}</td>
                        <td style="padding: 10px; text-align: center;">{{ $dokter->jadwal_praktik }}</td>
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
