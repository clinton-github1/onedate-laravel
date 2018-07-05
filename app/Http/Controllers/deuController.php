<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contact;
use App\Petition;


class deuController extends Controller
{
   public function index()
    {
    $sig_deu = DB::table('petitions')->get();
         return view('deu.signatures')->with('sig_deu' , $sig_deu);
   } 
    
    
    //
}
