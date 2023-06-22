<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\Barang;

class SupplierController extends Controller
{
    //
    public function index()
    {    
        $supplier = Supplier::all();
        $barang = Barang::all();
        return view('dashboard', ['supplier' => $supplier, 'barang' => $barang]);
    }
    public function tambah(){
        return view('tambahsupplier');
    }

    public function simpan(Request $request){
        //$data=supplier
        $data = Supplier::create([
            //'id' => $request->input('id'),
            'nama'=> $request->input('nama'),
            'alamat'=> $request->input('alamat'),
        ]);
        return redirect()->route('dashboard');
    }
    public function ubah($id){
        $data = Supplier::where('id',$id)
            ->first();

            return view('ubahsupplier', ['data'=>$data]);
    }
    public function update(Request $request){
        $data = Supplier::where('id', $request->id)
        ->update([
            'nama'=>$request->input('nama'),
            'alamat'=>$request->input('alamat'),
        ]);
        return redirect()->route('dashboard');
    }

    public function hapus($id){
        $data = Supplier::where('id', $id)
        ->delete();

        return redirect('dashboard');
    }

}