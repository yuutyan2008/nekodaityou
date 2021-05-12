<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
     * ログインしていないUserの転送先
     *
     * @var string
     */
    protected $redirectTo = '/admin/home';	

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('guest:user')->except('logout');
    }
    
    public function showLoginForm()
    {
        return view('auth.login');
    }

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
