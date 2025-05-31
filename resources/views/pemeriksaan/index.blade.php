@extends('layouts.app')

@section('content')
    <div class="card"
        style="background-color: white; height: auto; padding: 20px; margin: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-radius: 8px;">

        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <div>
                <h2>Pemeriksaan</h2>
                <p>List data pemeriksaan.</p>
            </div>
            <div style="display: flex; gap: 10px;">
                <input type="text" placeholder="Cari riwayat pemeriksaan..."
                    style="padding: 8px 12px; border: 1px solid #ccc; border-radius: 5px;">
                <a href="{{ route('pemeriksaans.create') }}"
                    style="padding: 10px 15px; background-color: #007bff; color: white; text-decoration: none; border-radius: 5px;">
                    Tambah
                </a>
            </div>
        </div>

        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="background-color: #f0f0f0;">
                    <th style="padding: 10px;">Tanggal</th>
                    <th style="padding: 10px;">Pasien</th>
                    <th style="padding: 10px;">Dokter</th>
                    <th style="padding: 10px;">Keluhan</th>
                    <th style="padding: 10px;">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pemeriksaans as $pemeriksaan)
                    <tr>
                        <td style="padding: 10px; text-align: center;">{{ $pemeriksaan->tanggal_periksa }}</td>
                        <td style="padding: 10px; text-align: center;">{{ $pemeriksaan->pasien->nama ?? '-' }}</td>
                        <td style="padding: 10px; text-align: center;">{{ $pemeriksaan->dokter->nama ?? '-' }}</td>
                        <td style="padding: 10px; text-align: center;">{{ $pemeriksaan->keluhan }}</td>
                        <td style="padding: 10px; text-align: center;">
                            <a href="{{ route('pemeriksaans.show', $pemeriksaan->id_pemeriksaan) }}"><i class="fas fa-eye"
                                    style="margin-left: 10px; color:blue;"></i></a>
                            <a href="{{ route('pemeriksaans.edit', $pemeriksaan->id_pemeriksaan) }}"><i class="fas fa-edit"
                                    style="margin-left: 10px; color: #e6a100;"></i></a>
                            <form action="{{ route('pemeriksaans.destroy', $pemeriksaan->id_pemeriksaan) }}" method="POST"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="border: none; background: none;">
                                    <i class="fas fa-trash-alt" style="margin-left: 10px; color: red;"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7">Belum ada data pasien.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection