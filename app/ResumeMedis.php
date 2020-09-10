<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class ResumeMedis extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'resume-medis';
    
    protected $fillable = [
        'diagnosa_masuk', 'anamnesis','pemeriksaan_fisik', 
        'pemeriksaan_pengunjung', 'obat_selama_rawat','diagnosa_akhir',
        'tindakan_operasi', 'obat_terapi_pulang','kondisi_saat_pulang',
        'pengobatan_lanjutan', 'tgl_kontrol', 'pengobatan_lanjutan'
    ];
}
