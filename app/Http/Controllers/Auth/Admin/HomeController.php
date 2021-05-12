<?php

namespace App\Http\Controllers\Admin;;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;	

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *ログイン後でなければアクセスできないよう、
     * 継承したControllerクラスのmiddleware()を利用する
     * @return void
     */
    public function __construct()
    {
        //
        $this->middleware('auth:admin');
    }


    /**
     * 全ユーザーリストの表示
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
        
        
    /**
     * 投稿フォーム作成
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * 投稿送信ボタン押した後の移動先となる
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * idで渡したユーザーのプロフィールを一件だけ表示
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * idで渡したユーザーの編集画面を表示
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 編集フォームの送信ボタ多を押した後の送信先
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * idで渡したユーザ一件だけ削除
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
