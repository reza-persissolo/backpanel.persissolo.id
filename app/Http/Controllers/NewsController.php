<?php

namespace App\Http\Controllers;

use App\Helper\Constant;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller {

    public function __construct(){

        $this->middleware('auth');
    }

    public function index(){
        $data['title']      = 'News';
        $data['fitur']      = Constant::MENU_NEWS;

        return $this->layout('news.view', $data);
    }

    public function show(Request $request){
        $data = News::query()
            ->where(Constant::ISDELETED, false)
            ->get();

        return $this->dataTables($data);
    }

    public function form($id = null){
        if ($id){
            $news = News::findOrFail($id);

            $form['nama']       = $news->nama;
            $form['deskripsi']  = $news->deskripsi;
            $form['image']      = $news->image;
            $form['url']        = url('news').'/'.$id;
        }else{

            $form['nama']       = '';
            $form['deskripsi']  = '';
            $form['image']      = '';
            $form['url']        = url('news');
        }
        
        $data['title']      = 'News';

        $data['form']   = $form;

        return $this->layout('news.form', $data);
    }
}