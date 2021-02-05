<?php

namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;
use App\Models\Mutation;

class ReportController extends Controller
{
    public function index()
    {
        $sumMasuk = Mutation::where('type_mut', 'masuk')->get();
        $sumKeluar = Mutation::where('type_mut', 'keluar')->get();

        foreach ($sumMasuk as $row) {
            $sum1[] = $row->vol_m3;
        }

        foreach ($sumKeluar as $row) {
            $sum2[] = $row->vol_m3;
        }

        $totalMasuk = array_sum($sum1);
        $totalKeluar = array_sum($sum2);

        return view('report.index', [
            'mutations' => Mutation::get(),
            'totalMasuk' => $totalMasuk,
            'totalKeluar' => $totalKeluar,
        ]);
    }
}
