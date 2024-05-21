
@extends('layouts.master')
@section('title','Tambah Data pemesanan')
@section('judul','Tambah Data pemesanan')
@section('nama','foodie')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="POST" action="/pemesanan/store/">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="form-group">
                    <label for="makanan">makanan</label>
                    <input type="text" class="form-control" id="makanan" name="makanan">
                </div>
                <div class="form-group">
                    <label for="harga">harga</label>
                    <input type="number" class="form-control" id="makanan" name="makanan">

                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal">
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="text" class="form-control" id="jumlah" name="jumlah">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
