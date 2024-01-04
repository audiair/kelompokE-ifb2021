@extends('layouts.layout')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h5 class="font-weight-bold">EDIT BARANG</h5>
            </div>
            <div class="card-body px-4 pt-0 pb-2">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('barang.update', $barang->kode) }}" method="POST">
                @csrf 
                @method('PATCH')
                    <div class="form-group">
                        <label for="">Kode Barang</label>
                        <input name="kode" type="text" class="form-control" placeholder="Enter kode barang"  value="{{ old('kode', $barang->kode) }}">
                    </div>
                    <div class="form-group">
                        <label for="">Nama Barang</label>
                        <input name="nama_barang" type="text" class="form-control" placeholder="Enter nama barang" value="{{ old('nama_barang', $barang->nama_barang) }}">
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Barang</label>
                        <input name="jenis" type="text" class="form-control" placeholder="Enter jenis barang" value="{{ old('jenis', $barang->jenis) }}">
                    </div>
                    <div class="form-group">
                        <label for="">Satuan</label>
                        <input name="satuan" type="text" class="form-control" placeholder="Enter satuan barang" value="{{ old('satuan', $barang->satuan) }}">
                    </div>
                    <div class="form-group">
                        <label for="">Harga Satuan</label>
                        <input name="harga_satuan" type="text" class="form-control" placeholder="Enter Harga barang" value="{{ old('harga_satuan', $barang->harga_satuan) }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        <div>
    </div>
</div>
@endsection