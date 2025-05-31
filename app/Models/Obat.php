<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    protected $table = 'obats';

    protected $primaryKey = 'id_obat';

    protected $fillable = [
        'id_obat',
        'nama_obat',
        'jenis_obat',
        'stok',
        'harga',
    ];

    public $incrementing = false;

    protected $keyType = 'string';

    public $timestamps = true;
}
