@extends('layouts.app')

@section('content')
<div class="card" style="background-color: white; padding: 30px; margin: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-radius: 12px;">

    <div style="margin-bottom: 25px;">
        <h2 style="margin: 0;">Edit Obat</h2>
        <p style="color: #555;">Form Edit Obat</p>
    </div>

   <form action="{{ route('obats.update', $dokter->id_dokter) }}" method="POST">
        @csrf
        @method('PUT')

        <div style="display: flex; gap: 40px;">
            <!-- Kolom Kiri -->
            <div style="flex: 1; display: flex; flex-direction: column; gap: 20px;">
             <div>
                <label for="id_obat" style="font-weight: 300; margin-bottom: 6px; display: block;">No. Obat</label>
                <input type="text" name="id_obat" id="id_obat" class="form-control"
                    style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;" 
                    value="{{ old('id_dokter', $obat->id_obat) }}"/>
            </div>

              <div>
                    <label for="stok" style="font-weight: 300; margin-bottom: 6px; display: block;">Stok</label>
                    <input type="text" name="stok" id="stok" class="form-control"
                        style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;" 
                        value="{{ old('stok', $obat->stok) }}"/>
                </div>
        
            </div>

            <!-- Kolom Kanan -->
            <div style="flex: 1; display: flex; flex-direction: column; gap: 20px;">
                <div>
                    <label for="nama_obat" style="font-weight: 300; margin-bottom: 6px; display: block;">Nama Obat</label>
                    <input type="text" name="nama_obat" id="nama_obat" class="form-control"
                        style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;" 
                        value="{{ old('nama_obat', $obat->nama_obat) }}"/>
                </div>
                <div>
                    <label for="dosis" style="font-weight: 300; margin-bottom: 6px; display: block;">Dosis</label>
                    <input type="text" name="dosis" id="dosis" class="form-control"
                        style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;" 
                         value="{{ old('dosis', $obat->dosis) }}"/>
                </div>
            </div>
        </div>

        <!-- Tombol -->
        <div style="display: flex; justify-content: flex-end; gap: 10px; margin-top: 30px;">
         <a href="{{ route('obats.index') }}" class="btn"
                style="padding: 10px 20px; background-color: red; color: white; border-radius: 6px; text-decoration: none; font-size: 18px;">
                Batal
            </a>
            <button type="submit" class="btn btn-primary"
                style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 6px; font-size: 18px; ">
                Simpan
            </button>
        </div>
    </form>
</div>
@endsection
