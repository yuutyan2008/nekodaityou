<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

//Authにより組み込まれる認証機能では、Authenticatableを継承したModelクラスが必要
class User extends Authenticatable
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
    
    //belongingとuserは1対多の関係
    public function belonging(){
        
        //主テーブルのデータを取得
        return $this->belongsTo('App\Belonging');
    }
    
    //userとactivityは１対多の関係
    public function activuties(){
        
        //従テーブルActivityモデルのデータを取得
        return $this->hasMany('App\Activity');
    }    
    
    
    //validation設定。guardをかけてModelで値を用意しなくても保存できるよう保護する
    protected $guarded = array('id', 'belonging_id');
    
     public static $rules = array(
         'name' => 'required',
         'email' => 'required',
         'password' => 'required|string|min:6|confirmed',
    );
    

    
    }
