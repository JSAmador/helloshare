<?php

namespace App\Http\Controllers;

use App\ItemImage;
use Illuminate\Http\Request;

class ItemsMediaController extends Controller
{
    //
    public function store(Request $request)
    {
        //


        $file = $request->file('image');
        $name = time().$file->getClientOriginalName();
        $file->move('images/items', $name);
        ItemImage::create(['file_path'=>$name]);

    }
}
