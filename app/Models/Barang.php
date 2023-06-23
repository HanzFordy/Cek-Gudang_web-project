<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barangs';
    protected $primaryKey='id';
    protected $fillable = ['id_supplier', 'nama_barang', 'tipe_barang', 'stok' ]; 
    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'id_supplier');
    }
    public function stok(){
        return $this->hasMany(StokBarang::class, 'id_barang');
    }
}