<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\items;
use App\Models\transakdetail;
use Illuminate\Support\Facades\Redirect;

class TransaksiController extends Controller
{
    public function store(Request $request)
    {
        $total = 0;
        $items = cart::where('userid',Auth::user()->id)->get();
        foreach ($items as $item){
            $harga = items::find($item->itemid);
            $total += $harga->price;
        }

        $transak = new transaksi();
        $transak->userid = Auth::user()->id;
        $transak->alamatkirim = $request->alamat;
        $transak->total_harga = $total;
        $transak->status = "belum dikirim";
        $transak->save();
        foreach ($items as $item){
            $detail = new transakdetail();
            $detail->transakid = $transak->id;
            $detail->itemid = $item->itemid;
            $detail->jumlah = $item->jumlah;
            $detail->save();
            $item->Delete();
        }

        return Redirect::to('/produk');
    }
}
