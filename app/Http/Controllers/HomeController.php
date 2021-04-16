<?php

namespace App\Http\Controllers;

class HomeController extends Controller {

    public function __construct(){

        $this->middleware('auth');
    }

    public function index(){

        return $this->layout('home.view');
    }

    public function user(){

        return $this->layout('user.view');
    }

}
