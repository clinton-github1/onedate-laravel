<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contact;
use App\Petition;

class espController extends Controller
{
    
    public function index()
    {
     $sig_esp = DB::table('petitions')->get();
         return view('esp.signatures')->with('sig_esp' , $sig_esp);
    }
    //
}
