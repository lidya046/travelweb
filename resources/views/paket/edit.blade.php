@extends('layouts.main')

@section('content')

<h2>Edit Paket Wisata</h2>

<form action="{{ route('paket.update', $paket->id) }}" method="POST" enctype="multipart/form-data">
@csrf @method('PUT')

<label>Nama Paket</label>
<input type="text" name="nama" value="{{ $paket->nama }}" class="form-control" required>

<label>Harga</label>
<input type="number" name="harga" value="{{ $paket->harga }}" class="form-control" required>

<label>Deskripsi</label>
<textarea name="deskripsi" class="form-control" required>{{ $paket->deskripsi }}</textarea>

<label>Itinerary</label>
<textarea name="itinerary" class="form-control" required>{{ $paket->itinerary }}</textarea>

<label>Foto Baru (opsional)</label>
<input type="file" name="foto" class="form-control">

@if($paket->foto)
    <p>Foto lama:</p>
    <img src="{{ asset('storage/'.$paket->foto) }}" width="150">
@endif

<button class="btn btn-primary mt-3">Update</button>
</form>

@endsection
