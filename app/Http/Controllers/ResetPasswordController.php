<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ResetPasswordController extends Controller {

    use ThrottlesLogins;

    protected $redirectTo = '/home';

    public function __construct(){

        $this->middleware('guest:web')->except('logout');
    }

    public function showResetForm(){

        return view('reset');
    }
}