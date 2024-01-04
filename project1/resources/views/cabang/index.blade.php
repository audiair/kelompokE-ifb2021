@extends('layouts.layout')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>CABANG MINIMARKET</h6>
                <a href="" class="btn btn-primary p-2 text-xxs">Tambah Cabang</a>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Cabang ID</th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Nama Cabang</th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Kota</th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Manajer</th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Action</th>
                            </tr>
                        </thead>
                        <tbody class="table align-items-center">
                        @foreach($cabangs as $cabang)
                            <tr>
                                <td class="text-uppercase text-secondary text-xs font-weight-bolder px-5">{{ $cabang->id }}</td>
                                <td class="text-uppercase text-secondary text-xs font-weight-bolder px-4">{{ $cabang->nama_cabang }}</td>
                                <td class="text-uppercase text-secondary text-xs font-weight-bolder px-4">{{ $cabang->kota }}</td>
                                <td class="text-uppercase text-secondary text-xs font-weight-bolder px-4">{{ $cabang->manajer->id }} - {{ $cabang->manajer->nama }}</td>
                                <td class="flex flex-row gap-4 px-4">
                                    <form class="p-0" action="" method="POST">
                                        <a href="" class="btn btn-warning mt-0 mb-2 px-3 py-2 text-xxs">EDIT</a>
                                   </form>
                                   <form class="p-0" action="" method="POST">
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