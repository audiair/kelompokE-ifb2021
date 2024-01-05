@extends('layouts.layout')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h5 class="font-weight-bold">STOK BARANG</h5>
                <a href="{{route('stock.create')}}" class="btn btn-primary p-2 text-xxs">Tambah Stok</a>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">No</th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 px-5">Barang</th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Stok</th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Cabang</th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table align-items-center">
                        @php $no=1; @endphp
                        @foreach($stocks as $stock)
                            <tr>
                                <td class="text-uppercase text-secondary text-xs font-weight-bolder px-4">{{ $no++ }}</td>
                                <td class="text-uppercase text-secondary text-xs font-weight-bolder px-4">{{ $stock->barang->kode}} - {{ $stock->barang->nama_barang }}</td>
                                <td class="text-uppercase text-secondary text-xs font-weight-bolder px-4">{{ $stock->stok }}</td>
                                <td class="text-uppercase text-secondary text-xs font-weight-bolder px-4">{{ $stock->cabang->nama_cabang }}</td>
                                <td class="flex flex-row gap-4">
                                   <form class="p-0" action="{{route('stock.destroy', $stock->id)}}" method="POST">
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