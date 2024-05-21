@extends('layouts.master')

@section('title', 'Edit Penjualan')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Penjualan</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="post" action="/penjualan/{{$pen->id}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nomor Transaksi</label>
                    <input type="text" value="{{$pen->notrans}}" class="form-control" name="notrans">
                </div>
                <div class="mb-3">
                    <label class="form-label">Merk</label>
                    <input type="text" value="{{$pen->merk}}" class="form-control" name="merk">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jumlah Penjualan</label>
                    <input type="text" value="{{$pen->jumlah}}" class="form-control" name="jumlah">
                </div>
                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="text" value="{{$pen->harga}}" class="form-control" name="harga">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection