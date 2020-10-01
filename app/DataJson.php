<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class DataJson extends Eloquent
{
    protected $connection = "mongodb";
    protected $collection = "DataJson";
    protected $fillable = [
        "nama","no_pendaftaran","no_rekam_medis",
        "agama","tgl_lahir","umur",
        "jenkel","desa","kecamatan",
        "kota_kabupaten","status","tanggung_jawab",
        "nama_pj","alamat_pj","desa_pj",
        "kecamatan_pj","kota_kabupaten_pj","cara_masuk_rs",
        "cara_penerimaan","kelas_pelayanan","penjamin",
        "tgl_masuk","jam","alamat", "status_update"
    ];
}
