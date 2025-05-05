<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    /** @use HasFactory<\Database\Factories\ProdukFactory> */
    use HasFactory;
    protected $fillable = [
        'barcode',
        'nama',
        'harga',
        'stok',
        'gambar',
        'kategori_id',
    ];
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
    public function transaksiItem()
    {
        return $this->hasMany(TransaksiItem::class, 'produk_id');
    }
}
