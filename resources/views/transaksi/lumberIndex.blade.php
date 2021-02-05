@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Lumber
                @include('alert')
            </div>

            <form method="POST" action={{ route('transaksi.store') }}>
                @csrf
                <div class="m-2 float-right">
                    <button type="submit" class="btn btn-dark">Save</button>
                    <a href="#" class="btn btn-dark">Delete</a>
                    <a href="#" class="btn btn-dark">Edit</a>
                </div>

                <div class="card-body float-left">
                    <div class="card">
                        <div class="card-header">
                            Header Data
                        </div>

                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="left">
                                    <div class="form-group row">
                                        <label for="jenisTransaksi" class="col-sm-5 col-form-label">Jenis Transaksi</label>
                                        <div class="col-sm-7">
                                            <select class="custom-select" id="typeMut" name="typeMut">
                                                <option selected>Pilih</option>
                                                <option value="masuk">Masuk</option>
                                                <option value="keluar">Keluar</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tanggal" class="col-sm-5 col-form-label">Tanggal</label>
                                        <div class="col-sm-7">
                                            <input type="date" name="tanggal" class="form-control" id="tanggal" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="namaPetugas" class="col-sm-5 col-form-label">Nama Petugas</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="namaPetugas" class="form-control" id="namaPetugas"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="form-group row">
                                        <div class="col-sm-1"></div>
                                        <label for="kodeMutasi" class="col-sm-4 col-form-label">Kode Mutasi</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="kodeMutasi" class="form-control" id="kodeMutasi"
                                                readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card mt-5">
                        <div class="card-header">
                            Detail Data Barang
                        </div>

                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="left">
                                    <div class="form-group row">
                                        <label for="kodeBarang" class="col-sm-5 col-form-label">Kode Barang</label>
                                        <div class="col-sm-7">
                                            <select class="custom-select" name="kodeBarang" id="kodeBarang">
                                                @foreach ($items as $item)
                                                    <option>{{ $item->item_kode }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="namaBarang" class="col-sm-5 col-form-label">Nama Barang</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="namaBarang" class="form-control" id="namaBarang"
                                                readonly required>
                                        </div>
                                    </div>

                                    <div class="countLumber">
                                        <div class="form-group row">
                                            <label for="tebal" class="col-sm-5 col-form-label">Tebal (cm)</label>
                                            <div class="col-sm-7">
                                                <input type="text" name="tebal" class="form-control" id="tebal" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="panjang" class="col-sm-5 col-form-label">Lebar (cm)</label>
                                            <div class="col-sm-7">
                                                <input type="text" name="lebar" class="form-control" id="lebar" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="panjang" class="col-sm-5 col-form-label">Panjang (cm)</label>
                                            <div class="col-sm-7">
                                                <input type="text" name="panjang" class="form-control" id="panjang"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="pcs" class="col-sm-5 col-form-label">Pcs</label>
                                            <div class="col-sm-7">
                                                <input type="text" name="pcs" class="form-control" id="pcs" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="volume" class="col-sm-5 col-form-label">Volume</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="volume" class="form-control" id="volume2">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    @endsection
