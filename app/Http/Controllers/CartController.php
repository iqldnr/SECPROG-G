<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;
use App\Models\cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\items;
use Symfony\Component\Routing\Route;

class CartController extends Controller
{

    public function store(Request $request){
        if (Auth::check()) {



                $cartitem = new cart();
                $cartitem->userid = \Auth::user()->id;
                $cartitem->itemid = $request->itemid;
                $cartitem->jumlah = $request->jumlah;
                if ($cartitem->jumlah < 0) {
                    return Redirect::to('produk')->with('alert', 'Tidak besi jual, hanya bisa beli!');
                }
                $item = items::firstWhere('id', $cartitem->itemid);
                print $item;
                $item->stock = $item->stock - $cartitem->jumlah;
                if ($item->stock < 0) {
                    return Redirect::to('produk')->with('alert', 'Jangan melebihi stok!');
                }

                $cartitem->save();
                $item->save();
                return Redirect::to('produk');

        }
        else{
            return Redirect::to('login');
        }
    }

}


