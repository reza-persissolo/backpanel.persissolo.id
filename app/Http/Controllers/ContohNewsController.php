<?php

namespace App\Http\Controllers;

use App\Helper\Constant;
use Illuminate\Support\Facades\DB;

class ContohNewsController extends Controller {

    public function index($id){
        
        $news = DB::table('news')->where('id', $id)->first();
        return view('news.contohnews', ['news'=>$news]);
    }
    
}