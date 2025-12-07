@extends('layouts.main')

@section('content')

<h2>Tambah Paket Wisata</h2>

<form action="{{ route('paket.store') }}" method="POST" enctype="multipart/form-data">
@csrf

<label>Nama Paket</label>
<input type="text" name="nama" class="form-control" required>

<label>Harga</label>
<input type="number" name="harga" class="form-control" required>

<label>Deskripsi</label>
<textarea name="deskripsi" class="form-control" required></textarea>

<label>Itinerary</label>
<textarea name="itinerary" class="form-control" required></textarea>

<label>Foto</label>
<input type="file" name="foto" class="form-control">

<button class="btn btn-primary mt-3">Simpan</button>
</form>

@endsection
