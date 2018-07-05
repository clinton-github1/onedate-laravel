<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contact;
use App\Petition;

class czechController extends Controller
{
    
    public function index()
    {
    $sig_cz = DB::table('petitions')->get();
         return view('czech.signatures')->with('sig_cz' , $sig_cz);
    }
    //
}
