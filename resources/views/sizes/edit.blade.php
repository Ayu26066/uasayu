@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Ukuran</h1>
    <form action="{{ route('sizes.update', $size->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="size">Ukuran</label>
            <input type="text" class="form-control" id="size" name="size" value="{{ $size->size }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection