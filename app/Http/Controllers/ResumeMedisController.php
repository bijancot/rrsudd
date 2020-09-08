<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeMedisController extends Controller
{
    public function FormInsert(){
        return view('ResumeMedis/form-insert');
    }
}
