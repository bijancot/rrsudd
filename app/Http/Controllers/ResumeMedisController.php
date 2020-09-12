<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ResumeMedis;

class ResumeMedisController extends Controller
{
    public function FormInsert(){
        return view('ResumeMedis/form-insert');
    }

    public function Insert(Request $req){
        $resume = new ResumeMedis();
        $resume->diagnosa_masuk = $req->get('diagnosa_masuk');
        $resume->anamnesis = $req->get('anamnesis');
        $resume->pemeriksaan_fisik = $req->get('pemeriksaan_fisik');
        $resume->pemeriksaan_pengunjung = $req->get('pemeriksaan_pengunjung');
        $resume->obat_selama_rawat = $req->get('obat_selama_rawat');
        $resume->diagnosa_akhir = $req->get('diagnosa_akhir');
        $resume->tindakan_operasi = $req->get('tindakan_operasi');
        $resume->obat_terapi_pulang = $req->get('obat_terapi_pulang');
        $resume->poliklinik = $req->get('poliklinik');
        $resume->pengobatan_lanjutan = $req->get('pengobatan_lanjutan');
        $resume->tgl_kontrol = $req->get('tgl_kontrol');
        $resume->status = "0";
        
        $resume->pengobatan_lanjutan = [
            'poliklinik' => $req->get('poliklinik'),
            'pengobatan_lanjutan' => $req->get('pengobatan_lanjutan')
        ];
        
        if($req->get('kondisi_saat_pulang') == "dirujuk"){
            $resume->kondisi_saat_pulang = [
                'ket_dirujuk' => $req->get('ket_dirujuk'),
                'alasan' => $req->get('alasan')
            ];
        }else{
            $resume->kondisi_saat_pulang = $req->get('kondisi_saat_pulang');
        }
        $resume->save();
        
        return redirect('/pasien');
    }
    
    public function FormEdit($id){
        $resume =ResumeMedis::find($id);
        return view('/ResumeMedis/form-update', compact('resume'));
    }

    public function Update(Request $req, $id){
        if($req->status_update == "1"){
            //Edit Status
            $resume = ResumeMedis::find($id);
            $resume->status = "1";
            $resume->save();
    
            //Insert New Data
            $resume = new ResumeMedis();
            $resume->diagnosa_masuk = $req->get('diagnosa_masuk');
            $resume->anamnesis = $req->get('anamnesis');
            $resume->pemeriksaan_fisik = $req->get('pemeriksaan_fisik');
            $resume->pemeriksaan_pengunjung = $req->get('pemeriksaan_pengunjung');
            $resume->obat_selama_rawat = $req->get('obat_selama_rawat');
            $resume->diagnosa_akhir = $req->get('diagnosa_akhir');
            $resume->tindakan_operasi = $req->get('tindakan_operasi');
            $resume->obat_terapi_pulang = $req->get('obat_terapi_pulang');
            $resume->poliklinik = $req->get('poliklinik');
            $resume->pengobatan_lanjutan = $req->get('pengobatan_lanjutan');
            $resume->tgl_kontrol = $req->get('tgl_kontrol');
            $resume->status = "0";
            
            $resume->pengobatan_lanjutan = [
                'poliklinik' => $req->get('poliklinik'),
                'pengobatan_lanjutan' => $req->get('pengobatan_lanjutan')
            ];
            
            if($req->get('kondisi_saat_pulang') == "dirujuk"){
                $resume->kondisi_saat_pulang = [
                    'ket_dirujuk' => $req->get('ket_dirujuk'),
                    'alasan' => $req->get('alasan')
                ];
            }else{
                $resume->kondisi_saat_pulang = $req->get('kondisi_saat_pulang');
            }
            $resume->save();
            return redirect('/pasien');
        }else{
            return redirect('/pasien');
        }
    }
    public function Delete(Request $req){
        $resume = ResumeMedis::find($req->id);
        $resume->status = "2";
        $resume->save();
        return redirect('/pasien');
    }
}
