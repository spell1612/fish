<?php

namespace fish\Http\Controllers\Auth;

use fish\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function showLinkRequestForm()
    {
      return redirect('dbshow');
    }

    public function sendResetLinkEmail()
    {
      abort(404);
    }

    public function __construct()
    {
        $this->middleware('guest');
    }
}
