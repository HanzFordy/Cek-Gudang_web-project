<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Supplier;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    //
    public function index()
    {
        $barang = Barang::all();
        $banyakBarang = Barang::count();
        return view('barang', ['barang' => $barang, 'banyakBarang' => $banyakBarang]);
    }
        public function tambahBarang(){
            $supplier = Supplier::select('id','nama')->get();
            return view('tambahBarang', ['supplier' => $supplier]);
        }
    
        public function simpan(Request $request){
            $data = Barang::create([
                'nama_barang'=> $request->input('nama_barang'),
                'tipe_barang'=> $request->input('tipe_barang'),
                'id_supplier' =>$request->input('id_supplier'),
            ]);
            return redirect()->route('barang');
        }
        public function ubahBarang($id){
            $data = Barang::where('id',$id)
            ->first();
            $supplier = Supplier::select('id','nama')->get();
            return view('ubahBarang', ['data'=>$data, 'supplier' => $supplier]);
        }
        public function updateBarang(Request $request){
            $data = Barang::where('id', $request->id)
            ->update([
                'nama_barang'=>$request->input('nama_barang'),
                'tipe_barang'=>$request->input('tipe_barang'),
                'id_supplier'=>$request->input('id_supplier'),
            ]);
            return redirect()->route('barang');
        }
    
        public function hapusBarang($id){
            $data = Barang::where('id', $id)
            ->delete();
    
            return redirect('barang');
        }
}