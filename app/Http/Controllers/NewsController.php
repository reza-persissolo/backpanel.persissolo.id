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

            $form['judul']      = $news->judul;
            $form['author']     = $news->author;
            $form['deskripsi']  = $news->deskripsi;
            $form['url']        = url('news').'/'.$id;
        }else{

            $form['judul']      = '';
            $form['author']     = '';
            $form['deskripsi']  = '';
            $form['url']        = url('news');
        }
        
        $data['title']      = 'News';

        $data['form']   = $form;

        return $this->layout('news.form', $data);
    }

    public function save(Request $request){
        $data = new News();
        $data->judul     = $request->input('judul');
        $data->author    = $request->input('author');
        $data->deskripsi = $request->input('deskripsi');
        $data->save();

        return $this->json(true, 'Simpan Berhasil!');
    }

    public function update(Request $request, $id){
        $data = News::findOrFail($id);
        $data->judul     = $request->input('judul');
        $data->author    = $request->input('author');
        $data->deskripsi = $request->input('deskripsi');
        $data->save();

        return $this->json(true, 'Update Berhasil!');
    }

    public function delete($id){
        $data = News::findOrFail($id);
        $data->isdeleted    = true;
        $data->deleted_at   = date('Y-m-d H:i:s');
        $data->save();

        return $this->json(true, 'Hapus Berhasil!');
    }
}