<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use function GuzzleHttp\Promise\all;

class Siswa extends Model
{
    protected $table = 'siswa';

    protected $fillable = [
        'nomor_pendaftaran',
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'kelurahan',
        'kecamatan',
        'kota',
        'provinsi',
        'nama_ortu',
        'nomor_telfon',
        'nomor_nik',
        'nomor_kk',
        'foto'
    ];

}
