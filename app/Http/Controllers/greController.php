<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contact;
use App\Petition;


class greController extends Controller
{
    
     public function index()
    {
      $sig_gre = DB::table('petitions')->get();
         return view('gre.signatures')->with('sig_gre' , $sig_gre);
    
     }
    //
}
