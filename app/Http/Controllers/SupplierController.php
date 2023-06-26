<?php

namespace App\Http\Controllers;

use App\Models\StokBarang;
use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\Barang;

class SupplierController extends Controller
{
    //
    public function tampilHitung(){
        $banyakSupplier = Supplier::count();
        $banyakBarang = Barang::count();
        $stok = StokBarang::all();
        $sum = 0;
        foreach ($stok as $item) {
            $sum += $item->stok;
        }
        return view('dashboard', ['banyakSupplier' => $banyakSupplier, 'banyakBarang' => $banyakBarang, 'sum' => $sum]);
    }
    public function index()
    {    
        $supplier = Supplier::all();
        //$barang = Barang::all();
        $banyakSupplier = Supplier::count();
        return view('supplier', ['supplier' => $supplier, 'banyakSupplier' => $banyakSupplier]);
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
        return redirect()->route('supplier');
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
        return redirect()->route('supplier');
    }

    public function hapus($id){
        $data = Supplier::where('id', $id)
        ->delete();

        return redirect('supplier');
    }

}