<?php

namespace App\Http\Controllers;

use App\Helper\Constant;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller {

    public function __construct(){

        $this->middleware('auth');
    }

    public function index(){
        $data['title']      = 'User';
        $data['fitur']      = Constant::MENU_USERMAN_USER;

        return $this->layout('user-man.userlist.view', $data);
    }
}