<?php

use Illuminate\Support\Facades\DB;

function autoNumber()
{
    // $id = Mutation::orderBy('id_mut', 'desc')->first();

    $ids = DB::table('mutations')->where('id_mut', 'LIKE', '%k0000%')->orderBy('id', 'desc')->first();

    $id_baru = $ids->id_mut;

    // $lastId = $id ? $id->id_mut : 'm00000';

    // $kode = substr($lastId, 0, 1);

    // $angka = substr($lastId, 1, 5);

    // $angka_baru = str_repeat("0", 5 - strlen($angka + 1)) . ($angka + 1);

    // $id_baru = $kode . $angka_baru;

    return $id_baru;
}
