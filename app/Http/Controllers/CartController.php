<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\cart;
use Illuminate\Http\Request;
use Symfony\Component\Routing\Route;

class CartController extends Controller
{
    public function store(Request $request){
        $cartitem = new cart();
        $cartitem->userid = \Auth::user();
        $cartitem->itemid = $request->id;
        $cartitem->jumlah = $request->jumlah;
    }

}


