<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contact;
use App\Petition;

class franController extends Controller
{
     public function index()
    {
      $sig_fran = DB::table('petitions')->get();
         return view('fran.signatures')->with('sig_fran' , $sig_fran);
        
    }
    
    //
}
