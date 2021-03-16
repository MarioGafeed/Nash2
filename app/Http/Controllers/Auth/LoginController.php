<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated()
    {

        // get thye user permissions depinding on then roles
        $permissions = auth()->user()->getAllPermissions()->pluck('name')->toArray();
        // save the persdissions to can Chack on the persissions
        session()->put('user.permissions', $permissions);

        if (auth()->user()->type == 'admin') {
            return redirect()->intended('/admin');
        }

        return redirect()->intended($this->redirectPath());
    }
}
