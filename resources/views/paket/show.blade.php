@extends('layouts.main')

@section('content')

<h2>{{ $paket->nama }}</h2>

@if($paket->foto)
<img src="{{ asset('storage/'.$paket->foto) }}" class="img-fluid mb-3" width="400">
@endif

<p><strong>Harga:</strong> Rp {{ number_format($paket->harga) }}</p>

<h4>Deskripsi</h4>
<p>{{ $paket->deskripsi }}</p>

<h4>Itinerary</h4>
<p>{{ $paket->itinerary }}</p>

<a href="{{ route('paket.index') }}" class="btn btn-secondary mt-3">Kembali</a>

@endsection
