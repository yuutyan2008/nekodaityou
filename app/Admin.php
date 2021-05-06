<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admins extends Model
{
    
    //validation設定
    protected $guarded = array('id');
    
     public static $rules = array(
         'name' => 'required',
         'email' => 'required',
         'password' => 'required',
    );
        
    
}
