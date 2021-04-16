<?php

namespace App\Http\Controllers;

use App\Helper\Constant;
use App\Models\Galery;
use Illuminate\Http\Request;

class GaleryImageController extends Controller {

    public function __construct(){

        $this->middleware('auth');
    }

    public function index(){
        $data['title']      = 'Galery Image';
        $data['fitur']      = Constant::MENU_GALERY_IMAGE;

        return $this->layout('galery.image.view', $data);
    }

    public function show(Request $request){
        $data = Galery::query()
            ->where(Constant::ISDELETED, false)
            ->where('type',Constant::GALERY_IMAGE)
            ->get();

        return $this->dataTables($data);
    }

    public function form($id = null){
        if ($id){
            $galery = Galery::findOrFail($id);

            $form['nama']       = $galery->nama;
            $form['deskripsi']  = $galery->deskripsi;
            $form['image']      = $galery->image;
            $form['url']        = url('galery/image').'/'.$id;
        }else{

            $form['nama']       = '';
            $form['deskripsi']  = '';
            $form['image']      = '';
            $form['url']        = url('galery/image');
        }
        
        $data['title']      = 'Galery Image';

        $data['form']   = $form;

        return $this->layout('galery.image.form', $data);
    }
}