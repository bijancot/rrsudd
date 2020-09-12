<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ResumeMedis;

class PasienController extends Controller
{
    public function index()
    {
        $resumes=ResumeMedis::where("status", "0")->get();
        return view('pasien.index', compact('resumes'));
    }
}
