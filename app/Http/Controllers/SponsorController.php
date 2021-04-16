<?php

namespace App\Http\Controllers;

use App\Helper\Constant;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class SponsorController extends Controller {

    public function __construct(){

        $this->middleware('auth');
    }

    public function index(){
        $data['title']      = 'Sponsor';
        $data['fitur']      = Constant::MENU_SPONSOR;

        return $this->layout('sponsor.view', $data);
    }

    public function show(Request $request){
        $data = Sponsor::query()
            ->where(Constant::ISDELETED, false)
            ->get();

        return $this->dataTables($data);
    }

    public function form($id = null){
        if ($id){
            $sponsor = Sponsor::findOrFail($id);

            $form['nama']       = $sponsor->nama;
            $form['deskripsi']  = $sponsor->deskripsi;
            $form['image']      = $sponsor->image;
            $form['url']        = url('sponsor').'/'.$id;
        }else{

            $form['nama']       = '';
            $form['deskripsi']  = '';
            $form['image']      = '';
            $form['url']        = url('sponsor');
        }
        
        $data['title']      = 'Sponsor';

        $data['form']   = $form;

        return $this->layout('sponsor.form', $data);
    }
}