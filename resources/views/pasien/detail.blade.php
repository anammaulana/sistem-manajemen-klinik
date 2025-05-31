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
                <label for="no_dokter" style="font-weight: 300; margin-bottom: 6px; display: block;">No. Pasien</label>
                <input type="text" name="no_dokter" id="no_dokter" class="form-control"
                    style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;" />
            </div>

                <div>
                    <label for="jadwal_praktik" style="font-weight: 300; margin-bottom: 6px; display: block;">Tanggal Lahir</label>
                    <div style="position: relative;">
                        <input type="date" name="jadwal_praktik" id="jadwal_praktik" class="form-control"
                            style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;" />
                        <i class="fas fa-calendar-alt" style="position: absolute; right: 10px; top: 12px; color: #888;"></i>
                    </div>
                </div>
              <div>
                <label for="alamat" style="font-weight: 300; margin-bottom: 6px; display: block;">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control" rows="4"
                    style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc; resize: vertical;"></textarea>
            </div> 
            </div>

            <!-- Kolom Kanan -->
            <div style="flex: 1; display: flex; flex-direction: column; gap: 20px;">
                <div>
                    <label for="nama_lengkap" style="font-weight: 300; margin-bottom: 6px; display: block;">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"
                        style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;" />
                </div>
                <div>
                    <label for="no_str" style="font-weight: 300; margin-bottom: 6px; display: block;">Jenis Kelamin</label>
                    <input type="text" name="no_str" id="no_str" class="form-control"
                        style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;" />
                </div>
                <div>
                    <label for="no_str" style="font-weight: 300; margin-bottom: 6px; display: block;">No. Telepon</label>
                    <input type="text" name="no_str" id="no_str" class="form-control"
                        style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;" />
                </div>
            </div>
        </div>

</div>
@endsection
