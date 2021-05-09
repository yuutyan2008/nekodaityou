<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tails extends Model
{

    //catとtailは多対１の関係
    public function cats(){ 
    
        return $this->hasMany('App\Cat');
    }

}
