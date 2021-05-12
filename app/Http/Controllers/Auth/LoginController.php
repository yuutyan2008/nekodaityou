<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
<<<<<<< HEAD
use Illuminate\Http\Request;
=======
>>>>>>> origin/master

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
<<<<<<< HEAD
     * ログインしていないUserの転送先
=======
     * Where to redirect users after login.
>>>>>>> origin/master
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
<<<<<<< HEAD
        $this->middleware('guest:user')->except('logout');
    }
    
        public function showLoginForm()
    {
        return view('auth.login');
    }
    
    //登録済みユーザーを認証するために使用
    protected function guard()
    {
        return \Auth::guard('user');
    }

    public function logout(Request $request)
    {
        \Auth::guard('user')->logout();
        return redirect('/login');
    }
}

=======
        $this->middleware('guest')->except('logout');
    }
}
>>>>>>> origin/master
