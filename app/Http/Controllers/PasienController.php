<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ResumeMedis;

class PasienController extends Controller
{
    public function index()
    {
        $resumes=ResumeMedis::all();
        return view('pasien.index', compact('resumes'));
    }
}
