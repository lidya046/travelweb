@extends('layouts.main')

@section('content')

<h1 class="text-center mb-4">Selamat Datang di TravelKu</h1>

<h3>Paket Wisata Unggulan</h3>

<div class="row mt-3">
@foreach($paket as $p)
    <div class="col-md-4 mb-3">
        <div class="card">
            <img src="{{ asset('storage/'.$p->foto) }}" class="card-img-top">
            <div class="card-body">
                <h5>{{ $p->nama }}</h5>
                <p>Rp {{ number_format($p->harga) }}</p>
                <a href="{{ route('paket.show', $p->id) }}" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
@endforeach
</div>

@endsection
