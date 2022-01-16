<?php

namespace App\Http\Controllers;

use App\Models\items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ItemsController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request...

        $items = new items;

        $items->name = $request->name;

        $items->uploader = "admin";

        $items->price = $request->price;

        $items->description = $request->description;
        $items->stock = $request->jumlah;
        $items->save();
        
        $destination_path = 'public\images\products';
        $image = $request->file('image');
        $image_name = $items->id;
        $iname = "";
        $iname .= $image_name;
        $iname .= ".png";
        $path = $request->file('image')->storeAs($destination_path,$iname);


        return Redirect::to('produk');
    }
    public function update(Request $request)
    {
        // Validate the request...

        $items = items::find($request->id);

        $items->name = $request->name;

        $items->uploader = $request->uploader;

        $items->price = $request->price;

        $items->description = $request->description;

        $items->save();
    }

}
