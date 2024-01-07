@extends('layouts.layout')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>DATA USERS</h6>
                @hasanyrole('owner|manajer')
                <a href="{{route('user.create')}}" class="btn btn-primary p-2 text-xxs">Tambah User</a>
                @endhasanyrole
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">ID</th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Nama</th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Email</th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Password</th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Cabang</th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Role</th>
                                <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table align-items-center">
                        @foreach($users as $user)
                            <tr>
                                <td class="text-uppercase text-secondary text-xs font-weight-bolder px-4">{{ $user->id }}</td>
                                <td class="text-uppercase text-secondary text-xs font-weight-bolder px-4">{{ $user->name }}</td>
                                <td class="text-uppercase text-secondary text-xs font-weight-bolder px-4">{{ $user->email }}</td>
                                <td class="text-uppercase text-secondary text-xs font-weight-bolder px-4">{{ $user->password }}</td>
                                <td class="text-uppercase text-secondary text-xs font-weight-bolder px-5">{{ $user->cabang_id }}</td>
                                <td class="text-uppercase text-secondary text-xs font-weight-bolder px-4">{{ $user->role }}</td>
                                <td class="flex flex-row gap-4 px-4">
                                    @hasanyrole('owner|manajer')
                                   <form class="p-0" action="{{route('user.destroy', $user->id)}}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <input type="submit" class="btn btn-danger p-2 mb-0 text-xxs" value="delete">
                                   </form>
                                   @endhasanyrole
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