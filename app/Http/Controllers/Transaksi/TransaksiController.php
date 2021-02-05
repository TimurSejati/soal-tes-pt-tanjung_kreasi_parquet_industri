<?php

namespace App\Http\Controllers\Transaksi;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Mutation;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function logIndex()
    {
        return view('transaksi.logIndex', [
            'items' => Item::get(),
        ]);
    }

    public function lumberIndex()
    {
        return view('transaksi.lumberIndex', [
            'items' => Item::get(),
        ]);
    }

    function list() {
        return view('transaksi.list', [
            'mutations' => Mutation::get(),
        ]);
    }

    public function ajaxRequestBarang()
    {
        $datas = Item::where('item_kode', request('val'))->get();
        foreach ($datas as $row) {
            $data = $row->item_name;
        }
        return response()->json(['success' => $data]);
    }

    public function ajaxRequestKode()
    {
        $tipe = request('val');

        if ($tipe == "masuk") {
            $id = DB::table('mutations')->where('id_mut', 'LIKE', '%m0000%')->orderBy('id', 'desc')->first();
            $lastId = $id ? $id->id_mut : 'm00000';
            $kode = substr($lastId, 0, 1);
            $angka = substr($lastId, 1, 5);
            $angka_baru = str_repeat("0", 5 - strlen($angka + 1)) . ($angka + 1);
            $id_baru = $kode . $angka_baru;
        } else if ($tipe == "keluar") {
            $id = DB::table('mutations')->where('id_mut', 'LIKE', '%k0000%')->orderBy('id', 'desc')->first();
            $lastId = $id ? $id->id_mut : 'k00000';
            $kode = substr($lastId, 0, 1);
            $angka = substr($lastId, 1, 5);
            $angka_baru = str_repeat("0", 5 - strlen($angka + 1)) . ($angka + 1);
            $id_baru = $kode . $angka_baru;
        } else {
            $id_baru = '';
        }

        return response()->json(['success' => $id_baru]);
    }

    public function store()
    {

        $idKodeBarang = Item::where('item_kode', request('kodeBarang'))->first();

        Mutation::create([
            'id_mut' => request('kodeMutasi'),
            'type_mut' => request('typeMut'),
            'date_mut' => request('tanggal'),
            'petugas' => request('namaPetugas'),
            'item_id' => $idKodeBarang->id,
            'diameter' => request('diameter'),
            'tebal' => request('tebal'),
            'lebar' => request('lebar'),
            'panjang' => request('panjang'),
            'pcs' => request('pcs'),
            'vol_m3' => request('volume'),
        ]);

        return back()->with('success', 'Success');
    }
}
