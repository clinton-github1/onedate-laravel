<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contact;
use App\Petition;

class itaController extends Controller
{
   public function index()
    {
    $sig_ita = DB::table('petitions')->get();
         return view('ita.signatures')->with('sig_ita' , $sig_ita);
     
   }
    
    //
}
