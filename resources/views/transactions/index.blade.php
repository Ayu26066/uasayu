@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Transaksi</h1>
    <a href="{{ route('transactions.create') }}" class="btn btn-primary mb-3">Tambah Transaksi</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Merek</th>
                <th>Kategori</th>
                <th>Ukuran</th>
                <th>Warna</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $transaction)
            <tr>
                <td>{{ $transaction->id }}</td>
                <td>{{ $transaction->brand->name }}</td>
                <td>{{ $transaction->category->name }}</td>
                <td>{{ $transaction->size->size }}</td>
                <td>{{ $transaction->color->color }}</td>
                <td>{{ $transaction->quantity }}</td>
                <td>Rp {{ number_format($transaction->total_price, 2, ',', '.') }}</td> <!-- Format total harga -->                <td>
                    <a href="{{ route('transactions.edit', $transaction->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('transactions.destroy', $transaction->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection