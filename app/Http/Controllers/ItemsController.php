<?php

namespace App\Http\Controllers;

use App\Models\items;
use Illuminate\Http\Request;

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

        $items->jumlah = $request->jumlah;

        $destination_path = 'public/image/products';
        $image = $request->file('image');
        $image_name = $items->id.'.png';
        $path = $request->file('image')->storeAs($destination_path,$image_name);

        $items->save();

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
