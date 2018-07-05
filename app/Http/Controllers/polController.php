<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contact;
use App\Petition;


class polController extends Controller
{
   
    public function index()
    {
     $sig_pol = DB::table('petitions')->get();
         return view('pol.signatures')->with('sig_pol' , $sig_pol);
        
    }
    //
}
