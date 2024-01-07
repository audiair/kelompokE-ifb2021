@extends('layouts.layout')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h5 class="font-weight-bold">TAMBAH CABANG</h5>
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
                <form action="{{route('cabang.store')}}" method="POST">
                @csrf 
                    <div class="form-group">
                        <label for="">Nama Cabang</label>
                        <input name="nama_cabang" type="text" class="form-control" placeholder="Enter nama cabang">
                    </div>
                    <div class="form-group">
                        <label for="">Kota</label>
                        <input name="kota" type="text" class="form-control" placeholder="Enter kota cabang">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        <div>
    </div>
</div>
@endsection