<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contact;
use App\Petition;


class chinController extends Controller
{
    public function index()
    {
    $sig_chin = DB::table('petitions')->get();
         return view('chin.signatures')->with('sig_chin' , $sig_chin);
    }
    //
}
