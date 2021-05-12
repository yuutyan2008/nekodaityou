<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tails extends Model
{

<<<<<<< HEAD
    //tailとcatは1対多の関係
    public function cat(){ 
=======
    //catとtailは多対１の関係
    public function cats(){ 
>>>>>>> origin/master
    
        return $this->hasMany('App\Cat');
    }

}
