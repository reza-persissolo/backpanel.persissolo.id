<?php

namespace App\Http\Controllers;
<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\Facades\DataTables;

class Controller extends BaseController{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function json($status, $msg, $data = []){

        return response()->json([
            'status' => $status,
            'msg' => $msg,
            'data' => $data,
        ]);
    }

    public function resDTable($data){

        return response()->json($data);
    }

    public function dataTables($data){

        return DataTables::collection($data)->make(true);
    }

    public function dtArray($data){

        return DataTables::collection($data)->toArray();
    }

    public function layout($html, $data = [], $marge = []){
        $data['menu']   = Session::get("menu", []);

        return view($html, $data, $marge);
    }

    public function fileInfo($file){
        $image = Image::make($file);
        return [
            'size'      => $image->filesize(),
            'format'    => $image->mime(),
            'resolusi'  => $image->getHeight().'x'.$image->getWidth()
        ];
    }

    public function dtSearch($cari){
        if ($cari){

            return $cari['value'];
        }

        return '';
    }

<<<<<<< Updated upstream
=======
    public function getExportName($outlet){
        $fileName = '';
        if ($outlet){
            $data = Outlet::query()->findOrFail($outlet);

            $fileName .= '_'.$data->nama;
        }

        $fileName .= '_'.date('YmdHis');
        return $fileName;
    }
>>>>>>> Stashed changes
}
