<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cats extends Model
{

    //tailとcatは1対多の関係
    public function tail(){

        return $this->belongsTo('App\Tail');
    }
    
    //hairとcatは1対多の関係
    public function hair(){

        return $this->belongsTo('App\Hair');
    }
    
    //genderとcatは1対多の関係
    public function gender(){

        return $this->belongsTo('App\Gender');
    }
    
    //areaとcatは1対多の関係
    public function aarea(){

        return $this->belongsTo('App\Area');
    } 
    
    //attentionとcatは1対多の関係
    public function attention(){

        return $this->belongsTo('App\Attention');
    }     
}
