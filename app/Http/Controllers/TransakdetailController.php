<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class TransakdetailController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request...




        return Redirect::to('/produk');
    }
}
