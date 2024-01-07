@extends('layouts.layout')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>CABANG MINIMARKET</h6>
                @hasrole('owner')
                <a href="{{route('cabang.create')}}" class="btn btn-primary p-2 text-xxs">Tambah Cabang</a>
                @endhasrole
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">No</th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Cabang ID</th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Nama Cabang</th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Kota</th>
                                @hasrole('owner')
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Aksi</th>
                                @endhasrole
                            </tr>
                        </thead>
                        <tbody class="table align-items-center">
                        @php $no=1; @endphp
                        @foreach($cabangs as $cabang)
                            <tr>
                                <td class="text-uppercase text-secondary text-xs font-weight-bolder px-4">{{ $no++ }}</td>
                                <td class="text-uppercase text-secondary text-xs font-weight-bolder px-5">{{ $cabang->id }}</td>
                                <td class="text-uppercase text-secondary text-xs font-weight-bolder px-4">{{ $cabang->nama_cabang }}</td>
                                <td class="text-uppercase text-secondary text-xs font-weight-bolder px-4">{{ $cabang->kota }}</td>
                                @hasrole('owner')
                                <td class="flex flex-row gap-4 px-4">
                                    <form class="p-0" action="{{route('cabang.edit', $cabang->id)}}" method="POST">
                                        <a href="{{route('cabang.edit',  $cabang->id)}}" class="btn btn-warning mt-0 mb-2 px-3 py-2 text-xxs">EDIT</a>
                                   </form>
                                   <form class="p-0" action="{{route('cabang.destroy', $cabang->id)}}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <input type="submit" class="btn btn-danger p-2 mb-0 text-xxs" value="delete">
                                   </form>
                               </td>
                               @endhasrole
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