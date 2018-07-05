<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contact;
use App\Petition;


class nedController extends Controller
{
    public function index()
    {
     $sig_ned = DB::table('petitions')->get();
         return view('ned.signatures')->with('sig_ned' , $sig_ned);
    }
    
    //
}
