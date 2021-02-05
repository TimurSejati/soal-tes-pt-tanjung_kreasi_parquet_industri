@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Laporan Mutasi Barang
            </div>


            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Kode Barang</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Saldo Awal</th>
                            <th scope="col">Masuk</th>
                            <th scope="col">Keluar</th>
                            <th scope="col">Saldo Akhir</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($mutations as $mutation)

                            <tr>
                                <td scope="row">{{ $no++ }}</td>
                                <td>{{ $mutation->item->item_kode }}</td>
                                <td>
                                    {{ $mutation->item->item_name }}
                                </td>
                                <td>0</td>
                                <td>{{ $mutation->type_mut == 'masuk' ? $mutation->vol_m3 : 0 }}</td>
                                <td>{{ $mutation->type_mut == 'keluar' ? $mutation->vol_m3 : 0 }}</td>
                                <td>0</td>
                            </tr>


                        @endforeach

                        <tr>
                            <td>Total</td>
                            <td></td>
                            <td></td>
                            <td>0</td>
                            <td>{{ $totalMasuk }}</td>
                            <td>{{ $totalKeluar }}</td>
                            <td>0</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
