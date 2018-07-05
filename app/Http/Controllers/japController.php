<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contact;
use App\Petition;

class japController extends Controller
{
    
    public function index()
    {
     $sig_jap = DB::table('petitions')->get();
         return view('jap.signatures')->with('sig_jap' , $sig_jap);
   
    }
    
    //
}
