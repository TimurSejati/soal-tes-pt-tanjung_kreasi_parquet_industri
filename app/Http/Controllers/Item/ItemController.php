<?php

namespace App\Http\Controllers\Item;

use App\Http\Controllers\Controller;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        return view('item.index', [
            'items' => Item::get(),
        ]);
    }

    public function create()
    {
        return view('item.create');
    }

    public function store()
    {

        request()->validate(
            [
                'kode' => 'required',
                'name' => 'required',
            ]
        );

        Item::create([
            'item_kode' => request('kode'),
            'item_name' => request('name'),
        ]);

        return redirect('/items/list')->with('success', 'Item berhasil dibuat');
        // return back()->with('success', 'Item berhasil dibuat');

    }
}
