@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                List Transaksi
            </div>


            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th>Kode Mutasi</th>
                            <th>Type Mutasi</th>
                            <th>Tanggal</th>
                            <th>Petugas</th>
                            <th>Kode Barang</th>
                            <th>Diameter</th>
                            <th>Tebal</th>
                            <th>Lebar</th>
                            <th>Panjang</th>
                            <th>Pcs</th>
                            <th>Volume m3</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($mutations as $mutation)

                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <th>{{ $mutation->id_mut }}</th>
                                <th>{{ $mutation->type_mut }}</th>
                                <th>{{ date('d-m-Y', strtotime($mutation->date_mut)) }}</th>
                                <th>{{ $mutation->petugas }}</th>
                                <th>{{ $mutation->item->item_kode }}</th>
                                <th>{{ $mutation->diameter }}</th>
                                <th>{{ $mutation->tebal }}</th>
                                <th>{{ $mutation->lebar }}</th>
                                <th>{{ $mutation->panjang }}</th>
                                <th>{{ $mutation->pcs }}</th>
                                <th>{{ $mutation->vol_m3 }}</th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
