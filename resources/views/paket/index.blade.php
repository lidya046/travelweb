@extends('layouts.main')

@section('content')

<h2>Daftar Paket Wisata</h2>

<a href="{{ route('paket.create') }}" class="btn btn-primary mb-3">Tambah Paket</a>

<table class="table">
    <tr>
        <th>Nama</th>
        <th>Harga</th>
        <th>Aksi</th>
    </tr>

@foreach($paket as $p)
<tr>
    <td>{{ $p->nama }}</td>
    <td>Rp {{ number_format($p->harga) }}</td>
    <td>
        <a href="{{ route('paket.show', $p->id) }}" class="btn btn-info btn-sm">Detail</a>
        <a href="{{ route('paket.edit', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>

        <form action="{{ route('paket.destroy', $p->id) }}" method="POST" style="display:inline;">
            @csrf @method('DELETE')
            <button class="btn btn-danger btn-sm">Hapus</button>
        </form>
    </td>
</tr>
@endforeach

</table>

@endsection
