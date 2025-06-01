@extends('layouts.app')

@section('content')
<div class="card" style="background-color: white; padding: 30px; margin: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-radius: 12px;">

    <div style="margin-bottom: 25px;">
        <h2 style="margin: 0;">Detail Obat</h2>
        <p style="color: #555;">Detail Obat</p>
    </div>


        <div style="display: flex; gap: 40px;">
            <!-- Kolom Kiri -->
            <div style="flex: 1; display: flex; flex-direction: column; gap: 20px;">
           <div>
                    <label style="font-weight: 600; color: #333;">No. Obat</label>
                    <p style="margin: 6px 0 0; padding: 10px; background: #f9f9f9; border-radius: 8px; border: 1px solid #ccc;">{{ $obat->id_obat }}</p>
                </div>

             <div>
                    <label style="font-weight: 600; color: #333;">Stok</label>
                    <p style="margin: 6px 0 0; padding: 10px; background: #f9f9f9; border-radius: 8px; border: 1px solid #ccc;">{{ $obat->stok }}</p>
                </div>
        
            </div>

            <!-- Kolom Kanan -->
            <div style="flex: 1; display: flex; flex-direction: column; gap: 20px;">
            <div>
                    <label style="font-weight: 600; color: #333;">Nama Obat</label>
                    <p style="margin: 6px 0 0; padding: 10px; background: #f9f9f9; border-radius: 8px; border: 1px solid #ccc;">{{ $obat->nama_obat }}</p>
                </div>
                <div>
                    <label style="font-weight: 600; color: #333;">Dosis</label>
                    <p style="margin: 6px 0 0; padding: 10px; background: #f9f9f9; border-radius: 8px; border: 1px solid #ccc;">{{ $obat->dosis }}</p>
                </div>
            </div>
        </div>


</div>
@endsection
