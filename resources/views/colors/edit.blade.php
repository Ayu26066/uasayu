@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Warna</h1>
    <form action="{{ route('colors.update', $color->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="color">Warna</label>
            <input type="text" class="form-control" id="color" name="color" value="{{ $color->color }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection