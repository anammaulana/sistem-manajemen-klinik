<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'PASIENS'; // kalau nama tabelnya pakai huruf besar atau beda
    protected $primaryKey = 'id_pasien';  // sesuaikan dengan nama kolom pk-mu
    public $incrementing = false; // kalau primary key bukan auto increment
    protected $keyType = 'string'; // kalau pk bertipe string (bukan integer)

    protected $fillable = [
        'id_pasien',
        'nama',
        'tanggal_lahir',
        'alamat',
        'jenis_kelamin',
        'no_telepon',
    ];
}
