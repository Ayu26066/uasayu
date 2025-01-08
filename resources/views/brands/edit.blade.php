@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Merek</h1>
    <form action="{{ route('brands.update', $brand->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nama Merek</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $brand->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection