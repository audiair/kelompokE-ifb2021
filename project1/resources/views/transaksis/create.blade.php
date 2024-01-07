@extends('layouts.layout')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h5 class="font-weight-bold">TRANSAKSI</h5>
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
                <form action="{{route('transaksi.store')}}" method="POST">
                @csrf 
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="kode_barang">Daftar Barang</label>
                            <select class="form-control" id="kode_barang">
                            <option value="">Open this select menu</option>
                                @foreach ($barangs as $barang)
                                    <option value="{{ $barang->kode_barang }}" data-nama="{{ $barang->nama_barang }}"
                                        data-harga="{{ $barang->harga_satuan }}" data-id="{{ $barang->kode_barang }}">
                                        {{ $barang->nama_barang }} ( 
                                        Rp.<?= number_format($barang->harga_satuan) ?> )
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="">&nbsp;</label>
                            <button class="btn btn-primary d-block" type="button" onclick="tambahItem()">Tambah
                                Barang</button>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12 table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Quantity</th>
                                    <th>Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="transaksiItem">
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="2">Jumlah</th>
                                    <th class="quantity">0</th>
                                    <th class="totalHarga">0</th>
                                    <th></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="hidden" name="total_harga" value="0">
                        <button class="btn btn-success">Simpan Transaksi</button>
                    </div>
                </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script>
        var totalHarga = 0;
        var quantity = 0;
        var listItem = [];

        function tambahItem() {
            updateTotalHarga(parseInt($('#kode_barang').find(':selected').data('harga')))
        }

        function updateTotalHarga(nom) {
            totalHarga = totalHarga + nom;
            $('[name=total_harga]').val(totalHarga)
            $('.totalHarga').html(formatRupiah(totalHarga.toString()))
        }

    </script>
@endsection