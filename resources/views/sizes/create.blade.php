@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Ukuran</h1>
    <form action="{{ route('sizes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="size">Ukuran</label>
            <input type="text" class="form-control" id="size" name="size" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection