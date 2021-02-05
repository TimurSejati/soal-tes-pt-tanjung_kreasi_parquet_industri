<?php

namespace App\Http\Controllers\Transaksi;

use App\Http\Controllers\Controller;

class LogController extends Controller
{
    // public function logIndex()
    // {
    //     return view('transaksi.logIndex', [
    //         'items' => Item::get(),
    //     ]);
    // }

    // public function lumberIndex()
    // {
    //     return view('transaksi.lumberIndex', [
    //         'items' => Item::get(),
    //     ]);
    // }

    // public function ajaxRequest()
    // {
    //     $datas = Item::where('item_kode', request('val'))->get();
    //     foreach ($datas as $row) {
    //         $data = $row->item_name;
    //     }
    //     return response()->json(['success' => $data]);
    // }

    // public function store()
    // {
    //     Mutation::create([
    //         'id_mut' => request('kodeMutasi'),
    //         'type_mut' => request('typeMut'),
    //         'date_mut' => request('tanggal'),
    //         'petugas' => request('namaPetugas'),
    //         'item_id' => request('kodeBarang'),
    //         'diameter' => request('diameter'),
    //         'tebal' => request('tebal'),
    //         'lebar' => request('lebar'),
    //         'panjang' => request('panjang'),
    //         'pcs' => request('pcs'),
    //         'vol_m3' => request('volume'),
    //     ]);

    //     return redirect('/transactions/logIndex')->with('success', 'Success');
    // }
}
