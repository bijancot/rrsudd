<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Logging;

class LoggingController extends Controller
{
    public function toLogging($id_user = null, $metode = null, $keterangan = null)
    {
        // store log 
        if ($id_user != null && $metode != null) {

            $log = Logging::create([
                'id_user'       =>  $id_user,
                'metode'        =>  $metode,
                'keterangan'    =>  $keterangan,
            ]);

            return $log;
        } else {
            return 'Gagal simpan log';
        }
    }
}
