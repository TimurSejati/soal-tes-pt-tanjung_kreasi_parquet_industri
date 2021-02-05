@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                List Barang
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <a class="btn btn-primary float-right mx-3 my-3" href={{ route('item.create') }}>
                    Tambah Barang
                </a>
                @include('alert')
            </div>

            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Kode Barang</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col" style="text-align: center; width:200px">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($items as $item)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $item->item_kode }}</td>
                                <td>{{ $item->item_name }}</td>
                                <td>

                                    <a class="btn btn-dark" href="#">
                                        Delete
                                    </a>

                                    <a class="btn btn-dark" href="#">
                                        Update
                                    </a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
