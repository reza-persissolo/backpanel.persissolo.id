<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller {

    use ThrottlesLogins;

    protected $redirectTo = '/home';

    public function __construct(){

        $this->middleware('guest:web')->except('logout');
    }

    public function showRegisterForm(){

        return view('register');
    }
}