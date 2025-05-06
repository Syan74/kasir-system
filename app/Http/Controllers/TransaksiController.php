<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Transaksi;
use App\Http\Requests\StoreTransaksiRequest;
use App\Http\Requests\UpdateTransaksiRequest;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function addItem(Produk $produk)
    {
        //
    }

    public function removeItem(Produk $produk)
    {
        //
    }

    public function updateItemQty(Produk $produk)
    {
        //
    }

    public function hitungTotal()
    {
        //
    }

    public function hitungKembalian()
    {
        //
    }

    public function prosesPembayaran()
    {
        //
    }

    public function batalkanTransaksi()
    {
        //
    }

    public function cetakStruk()
    {
        //
    }

    public function getDetailTransaksi()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTransaksiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    public function getTransaksiByDate()
    {
        //
    }

    public function getTransaksiByKasir()
    {
        //
    }

    public function getTransaksiByPelanggan()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransaksiRequest $request, Transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }
}
