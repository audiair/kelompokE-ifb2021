@extends('layouts.layout')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h5 class="font-weight-bold">DATA BARANG</h5>
                <a href="{{route('barang.create')}}" class="btn btn-primary p-2 text-xxs">Tambah Barang</a>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">No</th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Kode Barang</th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Nama Barang</th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 px-3">Jenis Barang</th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 px-3">Satuan</th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Harga Satuan</th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table align-items-center">
                        @php $no=1; @endphp
                        @foreach($barangs as $barang)
                            <tr>
                                <td class="text-uppercase text-secondary text-xs font-weight-bolder px-4">{{ $no++ }}</td>
                                <td class="text-uppercase text-secondary text-xs font-weight-bolder px-5">{{ $barang->kode}}</td>
                                <td class="text-uppercase text-secondary text-xs font-weight-bolder px-4">{{ $barang->nama_barang }}</td>
                                <td class="text-uppercase text-secondary text-xs font-weight-bolder px-3">{{ $barang->jenis }}</td>
                                <td class="text-uppercase text-secondary text-xs font-weight-bolder px-3">{{ $barang->satuan }}</td>
                                <td class="text-uppercase text-secondary text-xs font-weight-bolder px-5">{{ $barang->harga_satuan }}</td>
                                <td class="flex flex-row gap-4">
                                    <form class="p-0" action="{{route('barang.edit', $barang->kode)}}" method="POST">
                                        <a href="{{route('barang.edit', $barang->kode)}}" class="btn btn-warning mt-0 mb-2 px-3 py-2 text-xxs">EDIT</a>
                                   </form>
                                   <form class="p-0" action="{{route('barang.destroy', $barang->kode)}}" method="POST">
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