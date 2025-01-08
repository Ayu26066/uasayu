@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Merek</h1>
    <a href="{{ route('brands.create') }}" class="btn btn-primary mb-3">Tambah Merek</a>
    <table class="table table-bordered">

        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($brands as $brand)
            <tr>
                <td>{{ $brand->id }}</td>
                <td>{{ $brand->name }}</td>
                <td>
                    <a href="{{ route('brands.edit', $brand->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('brands.destroy', $brand->id) }}" method="POST" style="display:inline;">
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