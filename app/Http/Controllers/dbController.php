<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contact;
use App\Petition;

class dbController extends BaseController
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
   public static function user_table(){
    
       
       $data=with(new User)->getUserData();
       
       return view(‘eng/signatures’)->with(‘data’,$data);
}
    
}