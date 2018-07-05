<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contact;
use App\Petition;

class danController extends Controller
{
    
    public function index()
    {
    $sig_dan = DB::table('petitions')->get();
         return view('dan.signatures')->with('sig_dan' , $sig_dan);
    }
    //
}
