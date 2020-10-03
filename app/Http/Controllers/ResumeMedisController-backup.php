<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ResumeMedis;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoggingController;
use App\DataJson;

class ResumeMedisController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function FormInsert(Request $request)
    {
        return view('ResumeMedis/form-insert');
    }

    public function Insert(Request $req)
    {
        $getIDuser  = Auth::user()->id;
        $logging    = new LoggingController;

        $resume     = new ResumeMedis();
        $resume->diagnosa_masuk         = $req->get('diagnosa_masuk');
        $resume->anamnesis              = $req->get('anamnesis');
        $resume->pemeriksaan_fisik      = $req->get('pemeriksaan_fisik');
        $resume->pemeriksaan_pengunjung = $req->get('pemeriksaan_pengunjung');
        $resume->obat_selama_rawat      = $req->get('obat_selama_rawat');
        $resume->diagnosa_akhir         = $req->get('diagnosa_akhir');
        $resume->tindakan_operasi       = $req->get('tindakan_operasi');
        $resume->obat_terapi_pulang     = $req->get('obat_terapi_pulang');
        $resume->poliklinik             = $req->get('poliklinik');
        $resume->pengobatan_lanjutan    = $req->get('pengobatan_lanjutan');
        $resume->tgl_kontrol            = $req->get('tgl_kontrol');
        $resume->status                 = "0";

        $resume->pengobatan_lanjutan = [
            'poliklinik'            => $req->get('poliklinik'),
            'pengobatan_lanjutan'   => $req->get('pengobatan_lanjutan')
        ];

        if ($req->get('kondisi_saat_pulang') == "dirujuk") {
            $resume->kondisi_saat_pulang = [
                'ket_dirujuk'       => $req->get('ket_dirujuk'),
                'alasan'            => $req->get('alasan')
            ];
        } else {
            $resume->kondisi_saat_pulang = $req->get('kondisi_saat_pulang');
        }

        $resume->save();

        $logging->toLogging($getIDuser, 'created', 'resume-medis');

        return redirect('/pasien');
    }

    public function FormEdit($id)
    {
        $resume = ResumeMedis::find($id);
        return view('/ResumeMedis/form-update', compact('resume'));
    }

    public function Update(Request $req, $id)
    {
        $getIDuser  = Auth::user()->id;
        $logging    = new LoggingController;

        if ($req->status_update == "1") {
            //Edit Status
            $resume = ResumeMedis::find($id);
            $resume->status = "1";

            $old_resume = [
                'diagnosa_masuk'         => $resume->diagnosa_masuk,
                'anamnesis'              => $resume->anamnesis,
                'pemeriksaan_fisik'      => $resume->pemeriksaan_fisik,
                'pemeriksaan_pengunjung' => $resume->pemeriksaan_pengunjung,
                'obat_selama_rawat'      => $resume->obat_selama_rawat,
                'diagnosa_akhir'         => $resume->diagnosa_akhir,
                'tindakan_operasi'       => $resume->tindakan_operasi,
                'obat_terapi_pulang'     => $resume->obat_terapi_pulang,
                // 'pengobatan_lanjutan'    => $resume->pengobatan_lanjutan,
                'tgl_kontrol'            => $resume->tgl_kontrol,
                'status'                 => $resume->status,
                // 'kondisi_saat_pulang'    => $resume->kondisi_saat_pulang,
            ];

            $old_pengobatan_lanjutan = $resume->pengobatan_lanjutan;

            if ($resume->kondisi_saat_pulang == "dirujuk") {
                $old_kondisi_saat_pulang = [
                    'ket_dirujuk'   => $resume->ket_dirujuk,
                    'alasan'        => $resume->alasan
                ];
            } else {
                $old_kondisi_saat_pulang = $resume->kondisi_saat_pulang;
            }

            // $resume->save();

            //Insert New Data
            $resume = new ResumeMedis();
            $resume->diagnosa_masuk         = $req->get('diagnosa_masuk');
            $resume->anamnesis              = $req->get('anamnesis');
            $resume->pemeriksaan_fisik      = $req->get('pemeriksaan_fisik');
            $resume->pemeriksaan_pengunjung = $req->get('pemeriksaan_pengunjung');
            $resume->obat_selama_rawat      = $req->get('obat_selama_rawat');
            $resume->diagnosa_akhir         = $req->get('diagnosa_akhir');
            $resume->tindakan_operasi       = $req->get('tindakan_operasi');
            $resume->obat_terapi_pulang     = $req->get('obat_terapi_pulang');
            $resume->poliklinik             = $req->get('poliklinik');
            $resume->pengobatan_lanjutan    = $req->get('pengobatan_lanjutan');
            $resume->tgl_kontrol            = $req->get('tgl_kontrol');
            $resume->status                 = "0";

            $resume->pengobatan_lanjutan = [
                'poliklinik'                => $req->get('poliklinik'),
                'pengobatan_lanjutan'       => $req->get('pengobatan_lanjutan')
            ];

            if ($req->get('kondisi_saat_pulang') == "dirujuk") {
                $resume->kondisi_saat_pulang = [
                    'ket_dirujuk'           => $req->get('ket_dirujuk'),
                    'alasan'                => $req->get('alasan')
                ];
            } else {
                $resume->kondisi_saat_pulang = $req->get('kondisi_saat_pulang');
            }

            $current_resume = [
                'diagnosa_masuk'         => $resume->diagnosa_masuk,
                'anamnesis'              => $resume->anamnesis,
                'pemeriksaan_fisik'      => $resume->pemeriksaan_fisik,
                'pemeriksaan_pengunjung' => $resume->pemeriksaan_pengunjung,
                'obat_selama_rawat'      => $resume->obat_selama_rawat,
                'diagnosa_akhir'         => $resume->diagnosa_akhir,
                'tindakan_operasi'       => $resume->tindakan_operasi,
                'obat_terapi_pulang'     => $resume->obat_terapi_pulang,
                // 'pengobatan_lanjutan'    => $resume->pengobatan_lanjutan,
                'tgl_kontrol'            => $resume->tgl_kontrol,
                'status'                 => $resume->status,
                // 'kondisi_saat_pulang'    => $resume->kondisi_saat_pulang,
            ];

            $current_pengobatan_lanjutan = $resume->pengobatan_lanjutan;

            if ($resume->kondisi_saat_pulang == "dirujuk") {
                $current_kondisi_saat_pulang = [
                    'ket_dirujuk'   => $resume->ket_dirujuk,
                    'alasan'        => $resume->alasan
                ];
            } else {
                $current_kondisi_saat_pulang = $resume->kondisi_saat_pulang;
            }
            // dump($current_kondisi_saat_pulang);

            // $resume->save();
            $resume_old = array_diff_assoc($old_resume, $current_resume);
            $resume_cur = array_diff_assoc($current_resume, $old_resume);
            // dump($resume_old);
            // dump($resume_cur);

            $pengobatan_lanjutan_old = array_diff_assoc($old_pengobatan_lanjutan, $current_pengobatan_lanjutan);
            $pengobatan_lanjutan_cur = array_diff_assoc($current_pengobatan_lanjutan, $old_pengobatan_lanjutan);
            // dump($pengobatan_lanjutan_old);
            // dump($pengobatan_lanjutan_cur);

            // dump($old_kondisi_saat_pulang);
            // dump($current_kondisi_saat_pulang);

            echo "<br>";
            echo "Saat ini :";
            echo "<br>";

            if ($pengobatan_lanjutan_old || $pengobatan_lanjutan_cur != NULL) {
                $old        = [
                    'old_resume'              => $resume_old,
                    'old_pengobatan_lanjutan' => $pengobatan_lanjutan_old,
                    'old_kondisi_saat_pulang' => $old_kondisi_saat_pulang,
                ];

                $current    = [
                    'cur_resume'               => $resume_cur,
                    'cur_pengobatan_lanjutan'  => $pengobatan_lanjutan_cur,
                    'cur_kondisi_saat_pulang'  => $current_kondisi_saat_pulang,
                ];

                $ket_logging = [
                    'old'        => $old,
                    'current'    => $current
                ];
            } else {
                $old        = [
                    'old_resume'              => $resume_old,
                    'old_kondisi_saat_pulang' => $old_kondisi_saat_pulang,
                ];

                $current    = [
                    'cur_resume'               => $resume_cur,
                    'cur_kondisi_saat_pulang'  => $current_kondisi_saat_pulang,
                ];
                $ket_logging = [
                    'old'        => $old,
                    'current'    => $current
                ];
            }

            dump($ket_logging);

            // $logging->toLogging($getIDuser, 'updated', $ket_logging);

            // return redirect('/pasien');
        } else {
            return redirect('/pasien');
        }
    }
    public function Delete(Request $req)
    {
        $getIDuser  = Auth::user()->id;
        $logging    = new LoggingController;
        $resume = ResumeMedis::find($req->id);
        $resume->status = "2";
        $resume->save();
        $logging->toLogging($getIDuser, 'deleted', "resume-medis '$req->id'");
        return redirect('/pasien');
    }

    public function VRisetJsonForm()
    {
        $datas = DataJson::where("status_update", "0")->get();
        return view('vform-dynamic', compact("datas"));
    }
    public function RisetJsonForm()
    {
        return view('form-dynamic');
    }

    public function InsertJsonForm(Request $req)
    {
        DataJson::create($req->all());
        return redirect("/vrisetjson");
    }
    public function EditJsonForm($id)
    {
        $datas = DataJson::find($id);
        return view("edit-form-dynamic", compact("datas"));
    }
    public function UpdateJsonForm(Request $req, $id)
    {
        $data = DataJson::find($id);
        $data->status_update = "1";
        $data->save();
        DataJson::create($req->all());
        return redirect("vrisetjson");
    }
    public function DeleteJsonData(Request $req)
    {
        $data = DataJson::find($req->id);
        $data->status_update = "2";
        $data->save();
        return redirect('/vrisetjson');
    }
}
