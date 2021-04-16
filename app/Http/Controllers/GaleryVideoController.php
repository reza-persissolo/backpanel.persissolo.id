<?php

namespace App\Http\Controllers;

use App\Helper\Constant;
use App\Models\models\Galery;
use Illuminate\Http\Request;

class GaleryVideoController extends Controller {

    public function __construct(){

        $this->middleware('auth');
    }

    public function index(){
        $data['title']      = 'Galery Video';
        $data['fitur']      = Constant::MENU_GALERY_VIDEO;

        return $this->layout('galery.video.view', $data);
    }

    public function show(Request $request){
        $data = Galery::query()
            ->where(Constant::ISDELETED, false)
            ->where('type',Constant::GALERY_VIDEO)
            ->get();

        return $this->dataTables($data);
    }
}