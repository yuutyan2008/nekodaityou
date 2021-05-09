<?php
//ログイン後のUser画面表示を処理するcontroller
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Auth;

//時刻を扱うために Carbonという日付操作ライブラリを使う
use Carbon\Carbon;

//App直下のHistoryモデルを使う
use App\History;

//imageの保存をS3になるよう変更
use Storage;

class UserController extends Controller
{
    //
}
