<?php

namespace App\Http\Controllers;

use App\Models\StokBarang;
use Illuminate\Http\Request;
use App\Models\Barang;

class StokBarangController extends Controller
{
    //
    public function index()
    {
        $data = StokBarang::all();
        return view('dashboard')->with('data', $data);
    }
        public function tambahStok(){
            $barang = Barang::select('id','nama_barang')->get();
            return view('tambahStok', ['barang' => $barang]);
        }
    
        public function simpan(Request $request){
            $data = StokBarang::create([
                'namaBarang'=> $request->input('namaBarang'),
                'id_barang' =>$request->input('id_barang'),
                'stok'=>$request->input('stok')
            ]);
            return redirect()->route('dashboard');
        }
        public function ubahStok($id){
            $data = StokBarang::where('id',$id)
            ->first();
            $barang = Barang::select('id','nama_barang')->get();
            return view('ubahStok', ['data'=>$data, 'barang' => $barang]);
        }
        public function updateStok(Request $request){
            $data = StokBarang::where('id', $request->id)
            ->update([
                'namaBarang'=>$request->input('namaBarang'),
                'id_barang'=>$request->input('id_barang'),
                'stok'=>$request->input('stok')
            ]);
            return redirect()->route('dashboard');
        }
    
        public function hapusStok($id){
            $data = StokBarang::where('id', $id)
            ->delete();
    
            return redirect('dashboard');
        }
}