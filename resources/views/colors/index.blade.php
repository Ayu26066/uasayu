@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Warna</h1>
    <a href="{{ route('colors.create') }}" class="btn btn-primary mb-3">Tambah Warna</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Warna</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($colors as $color)
            <tr>
            <td>{{ $color->id }}</td>
            <td>{{ $color->color }}</td>
                <td>
                    <a href="{{ route('colors.edit', $color->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('colors.destroy', $color->id) }}" method="POST" style="display:inline;">
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