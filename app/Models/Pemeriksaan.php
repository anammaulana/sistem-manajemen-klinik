<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemeriksaan extends Model
{
    protected $table = 'pemeriksaans';

    protected $primaryKey = 'id_pemeriksaan';

    protected $fillable = [
        'id_pemeriksaan',
        'id_pasien',
        'id_dokter',
        'resep_obat',
        'tanggal_periksa',
        'keluhan',
        'diagnosa',
        'tindakan',
    ];


    public $incrementing = false;

    protected $keyType = 'string';

    public $timestamps = true;
    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'id_pasien', 'id_pasien');
    }
    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'id_dokter', 'id_dokter');
    }
}
