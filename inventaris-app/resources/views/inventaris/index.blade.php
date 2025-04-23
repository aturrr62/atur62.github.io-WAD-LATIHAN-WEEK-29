@extends('layouts.app')

@section('title', 'Daftar Inventaris')

@section('content')
    <h1 class="mb-4">Daftar Inventaris Barang</h1>

    @if ($inventaris->count())
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Lokasi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($inventaris as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama_barang }}</td>
                <td>{{ $item->jumlah }}</td>
                <td>{{ $item->lokasi }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <div class="alert alert-warning">Tidak ada data inventaris tersedia.</div>
    @endif
@endsection
