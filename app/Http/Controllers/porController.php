<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contact;
use App\Petition;

class porController extends Controller
{
    public function index()
    {
     $sig_por = DB::table('petitions')->get();
         return view('por.signatures')->with('sig_por' , $sig_por); 
    }
    
    //
}
