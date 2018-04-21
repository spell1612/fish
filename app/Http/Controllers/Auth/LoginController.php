<?php

namespace fish\Http\Controllers\Auth;

use fish\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    use AuthenticatesUsers {
      logout as performLogout;
  }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dbshow';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function logout(Request $request)
     {
        $this->performLogout($request);
        return redirect()->route('dbshow');
     }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
