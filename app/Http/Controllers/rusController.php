<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contact;
use App\Petition;

class rusController extends Controller
{
    
    public function index()
    {
      
        $sig_rus = DB::table('petitions')->get();
         return view('rus.signatures')->with('sig_rus' , $sig_rus);
    }
    //
}
