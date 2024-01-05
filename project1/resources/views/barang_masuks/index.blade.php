@extends('layouts.layout')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h5 class="font-weight-bold">DATA BARANG MASUK</h5>
                <a href="{{route('barang_masuk.create')}}" class="btn btn-primary p-2 text-xxs">Tambah Barang</a>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">No</th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 px-2">Tanggal Masuk</th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Cabang</th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 px-5">Staff Gudang</th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 px-5">Barang</th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 px-3">Jumlah</th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Harga Beli</th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table align-items-center">
                        @php $no=1; @endphp
                        @foreach($barang_masuks as $barang_masuk)
                            <tr>
                                <td class="text-uppercase text-secondary text-xs font-weight-bolder px-4">{{ $no++ }}</td>
                                <td class="text-uppercase text-secondary text-xs font-weight-bolder px-4">{{ $barang_masuk->tgl_masuk}}</td>
                                <td class="text-uppercase text-secondary text-xs font-weight-bolder px-4">{{ $barang_masuk->cabang->nama_cabang }}</td>
                                <td class="text-uppercase text-secondary text-xs font-weight-bolder px-3">{{ $barang_masuk->staff_gudang->id }} - {{ $barang_masuk->staff_gudang->nama }}</td>
                                <td class="text-uppercase text-secondary text-xs font-weight-bolder px-4">{{ $barang_masuk->barang->kode }} - {{ $barang_masuk->barang->nama_barang }}</td>
                                <td class="text-uppercase text-secondary text-xs font-weight-bolder px-4">{{ $barang_masuk->jumlah }}</td>
                                <td class="text-uppercase text-secondary text-xs font-weight-bolder px-5">{{ $barang_masuk->harga_beli}}</td>
                                <td class="flex flex-row gap-4">
                                    <form class="p-0" action="{{route('barang_masuk.edit', $barang_masuk->id)}}" method="POST">
                                        <a href="{{route('barang_masuk.edit', $barang_masuk->id)}}" class="btn btn-warning mt-0 mb-2 px-3 py-2 text-xxs">EDIT</a>
                                   </form>
                                   <form class="p-0" action="{{route('barang_masuk.destroy', $barang_masuk->id)}}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <input type="submit" class="btn btn-danger p-2 mb-0 text-xxs" value="delete">
                                   </form>
                               </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection