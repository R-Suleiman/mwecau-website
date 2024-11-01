<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use RealRashid\SweetAlert\Facades\Alert;

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
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {

        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email' => 'Please type in your email address.',
            'password' => 'Please type in your password.',
        ]);
        // $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $logedInUser = Auth::user();

            if ($logedInUser->role == 0) {
                Alert::success('welcome', "{$logedInUser->name}")->autoClose('7000');
                return redirect()->route('admin.dashboard');
            } elseif ($logedInUser->role == 1) {
                Alert::success('welcome', "{$logedInUser->name}")->autoClose('7000');
                return redirect()->route('admin.library.index');
            } elseif ($logedInUser->role == 2) {
                Alert::success('welcome', "{$logedInUser->name}")->autoClose('7000');
                return redirect()->route('admin.project.index');
            } else {
                Auth::logout();
                Alert::error('Attention', 'Access Denied')->autoClose('7000');
                return redirect()->route('login');
            }

        } else {

            Alert::error('Attention', 'Invalid Credentials')->autoClose('6000');
            return back()->with('message', 'Invalid Credentials');
        }
    }
}
