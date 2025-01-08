@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Merek</h1>
    <form action="{{ route('brands.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nama Merek</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection