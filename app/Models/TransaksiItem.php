<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiItem extends Model
{
    /** @use HasFactory<\Database\Factories\TransaksiItemFactory> */
    use HasFactory;
    protected $fillable = [
        'transaksi_id',
        'produk_id',
        'namaProduk',
        'jumlah',
        'harga',
        'subtotal',
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class);
    }
}
