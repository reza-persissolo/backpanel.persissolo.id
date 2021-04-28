<?php

namespace App\Http\Controllers;

use App\Helper\Constant;
use App\Models\User;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller {

    use ThrottlesLogins;
        
    public $maxAttempts = 100;
    public $decayMinutes = 30;

    protected $redirectTo = '/home';

    public function __construct(){

        $this->middleware('guest:web')->except('logout');
    }

    public function showLoginForm(){

        return view('login');
    }

    public function login(Request $request){

        $this->validator($request);

        if ($this->hasTooManyLoginAttempts($request)){

            $this->fireLockoutEvent($request);
            return $this->sendLockoutResponse($request);
        }

        if(Auth::guard('web')->attempt(
            $request->only('email','password'),
            $request->filled('remember'))){

            $user = Auth::user();

            return redirect()
                ->intended(route('home'))
                ->with('status','You are Logged in as Admin!');
        }

        $this->incrementLoginAttempts($request);
        return $this->loginFailed();
    }

    public function logout(){
        Auth::guard('web')->logout();

        return redirect()
            ->route('login')
            ->with('status','User has been logged out!');
    }

    private function validator(Request $request){
        $rules = [
            'email' => 'required|string|min:5|max:191',
            'password' => 'required|string|min:4|max:255',
        ];

        $messages = [
            'email.exists' => 'These credentials do not match our records.',
        ];

        $request->validate($rules,$messages);
    }

    private function loginFailed(){
        return redirect()
            ->back()
            ->withInput()
            ->with('error','Login failed, please try again!');
    }

    public function username(){
        return 'email';
    }
}
