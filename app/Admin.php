<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admins extends Model
{
    
    //validation設定
    protected $guarded = array('id', 'belonging_id');
    
     public static $rules = array(
         'name' => 'required',
         'email' => 'required',
         'password' => 'required|string|min:6|confirmed',
    );
        
    
}
    //adminとactivityは１対多の関係
    public function activities(){

        return $this->hasMany('App\Activity');
    }    
     