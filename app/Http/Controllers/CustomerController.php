<?php

namespace App\Http\Controllers;

use App\Helper\Constant;
use App\Models\Customer;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Claims\Custom;
use Yajra\DataTables\Facades\DataTables;

class CustomerController extends Controller {

    public function __construct(){

        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $data['title']      = 'Customer';
        $data['fitur']      = Constant::MENU_DATA_CUSTOMER;

        // $customers = Customer::latest()->paginate(5);
        // return view('data.customer.view', compact('mcustomer'));

        if ($request->ajax()) {
            $data = Customer::query()
                    ->where(Constant::ISDELETED, false);
                    
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){   
                        $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editProduct">Edit</a>';

                        $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct">Delete</a>';
 
                         return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        return $this->layout('data.customer.view', $data);
    }

    public function store(Request $request)
    {
        Customer::updateOrCreate(['id' => $request->product_id],
                [
                    'nama' => $request->nama, 
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'alamat' => $request->alamat                    
                ]);        
   
        return response()->json(['success'=>'Simpan Sukses.']);
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        return response()->json($customer);
    }

    public function delete($id)
    {
        $data = Customer::findOrFail($id);
        $data->isdeleted    = true;
        $data->deleted_at   = date('Y-m-d H:i:s');
        $data->save();

        return $this->json(true, 'Hapus Berhasil!');
    }
}