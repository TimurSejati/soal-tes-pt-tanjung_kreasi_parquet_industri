@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Tambah Barang</div>
            @include('alert')

            <div class="card-body">
                <form action="{{ route('item.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="kode">Kode Barang</label>
                        <input type="text" name="kode" id="kode" class="form-control">
                        @error('kode')
                            <div class="mt-2 text-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Barang</label>
                        <input type="text" name="name" id="nama" class="form-control">
                        @error('name')
                            <div class="mt-2 text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection
