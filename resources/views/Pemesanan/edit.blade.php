
@extends('layouts.master')

@section('title', 'Edit pemesanan')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit pemesanan</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="post" action="/pemesanan/{{$pem->id}}">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text"  value="{{$pem->nama}}" class="form-control" name="nama">
                </div>
                <div class="mb-3">
                    <label class="form-label">Makanan</label>
                    <input type="text"  value="{{$pem->makanan}}" class="form-control" name="makanan">
                </div>
                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="number"  value="{{$pem->harga}}" class="form-control" name="harga">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal Pemesanan</label>
                    <input type="date"  value="{{$pem->tanggal}}" class="form-control" name="tanggal">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jumlah</label>
                    <input type="number"  value="{{$pem->jumlah}}" class="form-control" name="jumlah">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
