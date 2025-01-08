@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Warna</h1>
    <form action="{{ route('colors.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="color">Warna</label>
            <input type="text" class="form-control" id="color" name="color" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection