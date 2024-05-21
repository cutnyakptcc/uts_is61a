@extends('layouts.master')
@section('title','Tambah Data Penjualan')
@section('judul','Tambah Data Penjualan')
@section('nama','Friend Cellular')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="POST" action="/penjualan/store/">
                @csrf
                <div class="form-group">
                    <label for="notrans">Nomor Transaksi:</label>
                    <input type="text" class="form-control" id="notrans" name="notrans">
                </div>
                <div class="form-group">
                    <label for="merk">Merk:</label>
                    <input type="text" class="form-control" id="merk" name="merk">
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah Penjualan:</label>
                    <input type="text" class="form-control" id="jumlah" name="jumlah">
                </div>
                <div class="form-group">
                    <label for="harga">Harga:</label>
                    <input type="text" class="form-control" id="harga" name="harga">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection