<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//管理者の認証
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admins extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    //validation設定
    protected $guarded = array('id', 'belonging_id');
    
     public static $rules = array(
         'name' => 'required',
         'email' => 'required',
         'password' => 'required|string|min:6|confirmed',
         );



    //adminとactivityは１対多の関係
    public function activities(){

        return $this->hasMany('App\Activity');
    }    
}