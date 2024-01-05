@extends('layouts.layout')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h5 class="font-weight-bold">EDIT BARANG MASUK</h5>
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
                <form action="{{ route('barang_masuk.update', $barang_masuk->id) }}" method="POST">
                @csrf 
                @method('PATCH')
                    <div class="form-group">
                        <label for="date">Tanggal Masuk</label>
                        <input name="tgl_masuk" type="date" value="{{ old('tgl_masuk', $barang_masuk->tgl_masuk) }}" class="form-control" placeholder="DD/MM/YYY" id="date">
                    </div>
                    <div class="form-group">
                        <label for="">Cabang</label>
                        <br>
                        <select class="form-select" name="cabang_id" id="">
                            <option value="">Open this select menu</option>
                                @foreach ($cabangs as $key => $value)
                                    @if (old('cabang_id', $barang_masuk->cabang_id) == $key)
                                        <option value="{{ $key }}" selected>{{ $value }}</option>
                                    @else
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endif
                                @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Staff Gudang</label>
                        <br>
                        <select class="form-select" name="id_staff_gudang" id="">
                            <option value="">Open this select menu</option>
                                @foreach ($staff_gudangs as $key => $value)
                                    @if (old('id_staff_gudang', $barang_masuk->id_staff_gudang) == $key)
                                        <option value="{{ $key }}" selected>{{ $value }}</option>
                                    @else
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endif
                                @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Barang</label>
                        <br>
                        <select class="form-select" name="kode_barang" id="">
                            <option value="">Open this select menu</option>
                                @foreach ($barangs as $key => $value)
                                    @if (old('kode_barang', $barang_masuk->kode_barang) == $key)
                                        <option value="{{ $key }}" selected>{{ $value }}</option>
                                    @else
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endif
                                @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Jumlah</label>
                        <input name="jumlah" type="text" value="{{ old('jumlah', $barang_masuk->jumlah) }}" class="form-control" placeholder="Enter Harga barang">
                    </div>
                    <div class="form-group">
                        <label for="">Harga Beli</label>
                        <input name="harga_beli" type="text" value="{{ old('harga_beli', $barang_masuk->harga_beli) }}" class="form-control" placeholder="Enter Harga barang">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        <div>
    </div>
</div>
@endsection