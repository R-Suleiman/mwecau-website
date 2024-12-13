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
            'email' => 'required|email',
            'password' => 'required|min:6',
        ], [
            'email.required' => 'Oops! You forgot to enter your email address. Please fill it in.',
            'email.email' => 'Hmm, that doesn’t look like a valid email address. Please check and try again.',
            'password.required' => 'Don’t leave the password field empty! Please type in your password.',
            'password.min' => 'Your password is too short! It needs to be at least 6 characters long.',
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
            } elseif ($logedInUser->role == 3) {
                return redirect()->route('health-center.dashboard')->with('success', "Welcome {$logedInUser->name}");
            } else {
                Auth::logout();
                Alert::error('Attention', 'Access Denied')->autoClose('7000');
                return redirect()->route('login');
            }

        } else {

            // Alert::error('Attention', 'Invalid Credentials')->autoClose('6000');
            return back()->with('fail', 'Invalid Credentials');
        }
    }
}
