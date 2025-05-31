@extends('layouts.app')

@section('content')
    <div class="card"
        style="background-color: white; padding: 30px; margin: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-radius: 12px;">

        <div style="margin-bottom: 25px;">
            <h2 style="margin: 0;">Tambah Pasien</h2>
            <p style="color: #555;">Form Tambah Pasien</p>
        </div>

        <form action="{{ route('pasiens.store') }}" method="POST">
            @csrf

            <div style="display: flex; gap: 40px;">
                <!-- Kolom Kiri -->
                <div style="flex: 1; display: flex; flex-direction: column; gap: 20px;">
                    <div>
                        <label for="id_pasien" style="font-weight: 300; margin-bottom: 6px; display: block;">No.
                            Pasien</label>
                        <input type="text" name="id_pasien" id="id_pasien" class="form-control"
                            style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;"
                            value="{{ old('id_pasien') }}" />
                    </div>

                    <div>
                        <label for="tanggal_lahir" style="font-weight: 300; margin-bottom: 6px; display: block;">Tanggal
                            Lahir</label>
                        <div style="position: relative;">
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control"
                                style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;"
                                value="{{ old('tanggal_lahir') }}" />
                            <i class="fas fa-calendar-alt"
                                style="position: absolute; right: 10px; top: 12px; color: #888;"></i>
                        </div>
                    </div>

                    <div>
                        <label for="alamat" style="font-weight: 300; margin-bottom: 6px; display: block;">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" rows="4"
                            style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc; resize: vertical;">{{ old('alamat') }}</textarea>
                    </div>
                </div>

                <!-- Kolom Kanan -->
                <div style="flex: 1; display: flex; flex-direction: column; gap: 20px;">
                    <div>
                        <label for="nama" style="font-weight: 300; margin-bottom: 6px; display: block;">Nama Lengkap</label>
                        <input type="text" name="nama" id="nama" class="form-control"
                            style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;"
                            value="{{ old('nama') }}" />
                    </div>

                    <div>
                        <label for="jenis_kelamin" style="font-weight: 300; margin-bottom: 6px; display: block;">
                            Jenis Kelamin
                        </label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control"
                            style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;">
                            <option value="">-- Pilih Jenis Kelamin --</option>
                            <option value="L" {{ old('jenis_kelamin') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="P" {{ old('jenis_kelamin') == 'P' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>


                    <div>
                        <label for="no_telepon" style="font-weight: 300; margin-bottom: 6px; display: block;">No.
                            Telepon</label>
                        <input type="text" name="no_telepon" id="no_telepon" class="form-control"
                            style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;"
                            value="{{ old('no_telepon') }}" />
                    </div>
                </div>
            </div>

            <!-- Tombol -->
            <div style="display: flex; justify-content: flex-end; gap: 10px; margin-top: 30px;">
                <a href="{{ route('pasiens.index') }}" class="btn"
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