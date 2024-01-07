@extends('layouts.layout')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h5 class="font-weight-bold">TAMBAH USER</h5>
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
                <form action="{{route('user.store')}}" method="POST">
                @csrf 
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input name="name" type="text" class="form-control" placeholder="Enter nama" >
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input name="email" type="text" class="form-control" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input name="password" type="text" class="form-control"  placeholder="Enter password">
                    </div>
                    <div class="form-group">
                        <label for="">Cabang</label>
                        <br>
                        @hasrole('manajer')
                        <input name="cabang_id" type="hidden" class="form-control" value="{{Auth::user()->cabang_id}}">
                        @endhasrole

                        @hasrole('owner')
                        <select class="form-select" name="cabang_id" id="">
                            <option value="">Open this select menu</option>
                                @foreach ($cabangs as $key => $value)
                                    @if (old('cabang_id') == $key)
                                        <option value="{{ $key }}" selected>{{ $value }}</option>
                                    @else
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endif
                                @endforeach
                        </select>
                        @endhasrole

                    </div>
                    <div class="form-group">
                        <label for="">Role</label>
                        <br>
                        <select name="role" class="form-select">
                            <option value="">Open this select menu</option>
                            @hasrole('owner')
                            <option value="owner">Owner</option>
                            <option value="manajer">Manajer</option>
                            <option value="supervisor">Supervisor</option>
                            <option value="kasir">Kasir</option>
                            <option value="staff gudang">Staff Gudang</option>
                            @endhasrole
                            
                            @hasrole('manajer')
                            <option value="supervisor">Supervisor</option>
                            <option value="kasir">Kasir</option>
                            <option value="staff gudang">Staff Gudang</option>
                            @endhasrole
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        <div>
    </div>
</div>
@endsection