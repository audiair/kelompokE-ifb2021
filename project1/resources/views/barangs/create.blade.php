@extends('layouts.layout')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h5 class="font-weight-bold">TAMBAH BARANG</h5>
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
                <form action="{{route('barang.store')}}" method="POST">
                @csrf 
                    <div class="form-group">
                        <label for="">Kode Barang</label>
                        <input name="kode"type="text" class="form-control" placeholder="Enter kode barang">
                    </div>
                    <div class="form-group">
                        <label for="">Nama Barang</label>
                        <input name="nama_barang" type="text" class="form-control" placeholder="Enter nama barang">
                    </div>
                    <div class="form-group">
                        <label for="">Satuan</label>
                        <input name="satuan" type="text" class="form-control" placeholder="Enter satuan barang">
                    </div>
                    <div class="form-group">
                        <label for="">Harga Satuan</label>
                        <input name="harga_satuan" type="text" class="form-control" placeholder="Enter Harga barang">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        <div>
    </div>
</div>
@endsection