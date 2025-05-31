<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table = 'dokters';

    protected $primaryKey = 'id_dokter';

    protected $fillable = [
        'id_dokter',
        'nama',
        'spesialisasi',
        'no_str',
        'jadwal_praktik',
    ];

    public $incrementing = false;

    protected $keyType = 'string';

    public $timestamps = true;
}
