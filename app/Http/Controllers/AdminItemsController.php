<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\ItemCreateRequest;
use App\Image;
use App\Item;
use App\ItemImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Item::paginate(5);

        return view('admin.items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ItemCreateRequest $request)
    {
        //
        $user = Auth::user();
        $input = $request->all();

        if($file = $request->file('image')) {
            $name = time().$file->getClientOriginalName();
            $file->move('images', $name);
            $image = Image::create(['file_path'=>$name]);
            $input['image_id'] = $image->id;
        }

        $item =$user->items()->create($input);


        return redirect()->route('items.edit', $item->id);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $item = Item::findOrFail($id);

        $comments = $item->comments()->whereIsActive(1)->get();

        return view('item', compact('item', 'comments'));



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $item = Item::findOrFail($id);

        $item_images = $item->images;

        $categories = Category::pluck('name', 'id')->all();

        return view('admin.items.edit', compact('item', 'categories', 'item_images'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $input = $request->all();


        if($file = $request->file('image')) {
            $name = time().$file->getClientOriginalName();
            $file->move('images', $name);
            $image = Image::create(['file_path'=>$name]);
            $input['image_id'] = $image->id;
        }

        Auth::user()->items()->whereId($id)->first()->update($input);

        return redirect('/admin/items');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $item = Item::findOrFail($id);


        if($item->image->id != 0) {
            unlink(public_path().$item->image->file_path);
        }


        $item->delete();

        return redirect('/admin/items');

    }
}
