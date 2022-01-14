<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Routing\Route;

class CartController extends Controller
{
    public function store(Request $request){
        $cartitem = new cart();
        $cartitem->userid = \Auth::user()->id;
        $cartitem->itemid = $request->itemid;
        $cartitem->jumlah = $request->jumlah;

        $cartitem->save();
        return Redirect::to('produk');
    }

}


