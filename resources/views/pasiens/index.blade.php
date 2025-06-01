@extends('layouts.app')

@section('content')
    <div class="card"
        style="background-color: white; height: auto; padding: 20px; margin: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-radius: 8px;">

        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <div>
                <h2>Data Pasien</h2>
                <p>List data pasien.</p>
            </div>
            <div style="display: flex; gap: 10px;">
      <form method="GET" action="{{ route('pasiens.index') }}" style="margin-bottom: 20px; display: flex; gap: 10px;">
    <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama pasien..."
        style="padding: 8px 12px; border: 1px solid #ccc; border-radius: 5px;">
    <button type="submit" style="padding: 8px 12px; background-color: #007bff; color: white; border: none; border-radius: 5px;">
        Cari
    </button>
</form>
                <a href="{{route("pasiens.create")}}"
                    style="padding: 10px 15px; background-color: #007bff; color: white; text-decoration: none; border-radius: 5px;">
                    Tambah
                </a>
            </div>
        </div>

        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="background-color: #f0f0f0;">
                    <th style="padding: 10px; ">No - Pasien</th>
                    <th style="padding: 10px; ">Nama</th>
                    <th style="padding: 10px; ">Jenis Kelamin</th>
                    <th style="padding: 10px; ">No. Telpon</th>
                    <th style="padding: 10px; ">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pasiens as $pasien)
                    <tr>
                        <td style="padding: 10px; text-align: center;">{{ $pasien->id_pasien }}</td>
                        <td style="padding: 10px; text-align: center;">{{ $pasien->nama }}</td>
                        <!-- <td>{{ $pasien->tanggal_lahir }}</td> -->
                        <!-- <td>{{ $pasien->alamat }}</td> -->
                        <td style="padding: 10px; text-align: center;">{{ $pasien->jenis_kelamin }}</td>
                        <td style="padding: 10px; text-align: center;">{{ $pasien->no_telepon }}</td>
                        <td style="padding: 10px; text-align: center;">
                            <a href="{{ route('pasiens.show', $pasien->id_pasien) }}"><i class="fas fa-eye"
                            style="margin-left: 10px; color:blue;"></i></a>
                            <a href="{{ route('pasiens.edit', $pasien->id_pasien) }}"><i class="fas fa-edit"
                                    style="margin-left: 10px; color: #e6a100;"></i></a>
                            <form action="{{ route('pasiens.destroy', $pasien->id_pasien) }}" method="POST"
                                style="display:inline;" onsubmit="return confirm('Hapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit">
                                    <i class="fas fa-trash-alt" style="margin-left: 10px; color: red;"></i>
                                </button>
                            </form>
                            <!-- <a href="{{ route('pasiens.destroy', $pasien->id_pasien) }}" class="btn btn-sm btn-danger" onclick="return confirm('Hapus data ini?')"><i class="fas fa-trash-alt" style="margin-left: 10px; color: red;"></i></a> -->
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