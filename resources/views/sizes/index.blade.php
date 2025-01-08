@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Ukuran</h1>
    <a href="{{ route('sizes.create') }}" class="btn btn-primary mb-3">Tambah Ukuran</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Ukuran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sizes as $size)
            <tr>
                <td>{{ $size->id }}</td>
                <td>{{ $size->size }}</td>
                <td>
                    <a href="{{ route('sizes.edit', $size->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('sizes.destroy', $size->id) }}" method="POST" style="display:inline;">
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