<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petition extends Model
{
    
    public $timestamps = false;
   
    $data=DB::table(‘petitions’)->get();
     return $data;
    //
}
