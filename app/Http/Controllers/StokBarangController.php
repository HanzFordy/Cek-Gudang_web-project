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
        $stok = StokBarang::all();
        $sum = 0;
        foreach ($stok as $item) {
            $sum += $item->stok;
        }
        return view('stok', ['stok' => $stok, 'sum' => $sum]);
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
            return redirect()->route('stok');
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
            return redirect()->route('stok');
        }
    
        public function hapusStok($id){
            $data = StokBarang::where('id', $id)
            ->delete();
    
            return redirect('stok');
        }
}