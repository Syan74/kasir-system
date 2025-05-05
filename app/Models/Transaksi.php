<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    /** @use HasFactory<\Database\Factories\TransaksiFactory> */
    use HasFactory;
    protected $fillable = [
        'noInv',
        'total',
        'bayar',
        'kembalian',
        'status',
        'kasir_id',
        'pelanggan_id',
        'items',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }

    public function transaksiItem()
    {
        return $this->hasMany(TransaksiItem::class, 'transaksi_id');
    }
}
