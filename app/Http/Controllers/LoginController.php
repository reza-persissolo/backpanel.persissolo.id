<?php

namespace App\Http\Controllers;

use App\Helper\Constant;
use App\Models\Akses;
use App\Models\Menu;
use App\Models\User;
<<<<<<< Updated upstream
use Illuminate\Auth\Authenticatable;
=======
>>>>>>> Stashed changes
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller {

<<<<<<< Updated upstream
    use ThrottlesLogins;
        
=======
    use ThrottlesLogins;    
    use AuthenticatesUsers;
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
            $request->only('email','password'),
=======
            $request->only('username','password'),
>>>>>>> Stashed changes
            $request->filled('remember'))){

            $user = Auth::user();

            if ($user->level_id == Constant::LEVEL_ADMINISTRATOR){
                $menu = Menu::query()->where('level', Constant::MENU_LEVEL)
                    ->with('sub')
                    ->orderBy('seq', 'asc')
                    ->get();

                Session::put("menu", $menu);
            }else{

                $akses = Akses::query()->where('Level_id', $user->level_id)
                    ->with('menu')
                    ->get();

                $main   = [];
                $sub    = [];

                foreach ($akses as $item) {
                    if ($item->menu->menu_id){
                        if (!array_search($item->menu->menu_id, $main)){
                            $main[] = $item->menu->menu_id;
                        }

                        $sub[]  = $item->menu_id;
                    }else{
                        $main[] = $item->menu_id;
                    }
                }

                $menu = Menu::query()->where('level', Constant::MENU_LEVEL)
                    ->whereIn('id', $main)
                    ->orderBy('seq', 'asc')
                    ->get();

                $ini = [];
                foreach ($menu as $row) {
                    $subs = Menu::query()->where('level', Constant::SUBMENU_LEVEL)
                        ->where('menu_id', $row->id)
                        ->whereIn('id', $sub)
                        ->get();

                    $row->sub = $subs;
                    $ini[] = $row;
                }

                Session::put("menu", $ini);
            }

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
<<<<<<< Updated upstream
            'email' => 'required|string|min:5|max:191',
=======
            'username' => 'required|string|min:5|max:191',
>>>>>>> Stashed changes
            'password' => 'required|string|min:4|max:255',
        ];

        $messages = [
<<<<<<< Updated upstream
            'email.exists' => 'These credentials do not match our records.',
=======
            'username.exists' => 'These credentials do not match our records.',
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
        return 'email';
=======
        return 'username';
>>>>>>> Stashed changes
    }
}
