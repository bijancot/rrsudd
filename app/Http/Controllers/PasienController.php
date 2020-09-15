<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ResumeMedis;

class PasienController extends Controller
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

    public function index()
    {
        /**
         * Jika status pada collection 'resume-medis' = 0
         * tampilkan data pasien 
         */

        $resumes = ResumeMedis::where("status", "0")->get();
        return view('pasien.index', compact('resumes'));
    }
}
