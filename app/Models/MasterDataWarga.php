<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterDataWarga extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nik',
        'nama',
        'jenis_kelamin',
        'alamat',
        'penanggung_jawab',
        'kategori_warga',
        'status_bansos',
        'id_kabupaten',
        'id_kecamatan',
        'id_kelurahan',
        'pj_id',
    ];
}
