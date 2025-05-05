<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    /** @use HasFactory<\Database\Factories\PelangganFactory> */
    use HasFactory;

    protected $fillable = [
        'kode',
        'nama',
        'alamat',
        'email',
        'point',
        'level',
    ];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class . 'pelanggan_id');
    }
}
