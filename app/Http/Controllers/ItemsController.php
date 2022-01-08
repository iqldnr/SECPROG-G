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

        $items->uploader = ;

        $items->price = $request->price;

        $items->description = $request->description;

        $items->save();
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
