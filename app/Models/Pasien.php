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
    protected $table = 'pasiens';
    protected $primaryKey = 'id_pasien';
    public $incrementing = false; // jika ID diinput manual, seperti 'anam'
    protected $keyType = 'string'; // jika ID bukan integer

    protected $fillable = [
        'id_pasien',
        'nama',
        'tanggal_lahir',
        'alamat',
        'jenis_kelamin',
        'no_telepon',
    ];
}
