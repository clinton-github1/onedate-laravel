<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contact;
use App\Petition;


class hungController extends Controller
{
    
    public function index()
    {
     $sig_hung = DB::table('petitions')->get();
         return view('hung.signatures')->with('sig_hung' , $sig_hung);
        
     }
    //
}
