@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Transaksi</h1>
    <form action="{{ route('transactions.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="brand_id">Merek</label>
            <select class="form-control" id="brand_id" name="brand_id" required>
                @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="category_id">Kategori</label>
            <select class="form-control" id="category_id" name="category_id" required>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="size_id">Ukuran</label>
            <select class="form-control" id="size_id" name="size_id" required>
                @foreach ($sizes as $size)
                    <option value="{{ $size->id }}">{{ $size->size }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="color_id">Warna</label>
            <select class="form-control" id="color_id" name="color_id" required>
                @foreach ($colors as $color)
                    <option value="{{ $color->id }}">{{ $color->color }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="quantity">Jumlah</label>
            <input type="number" class="form-control" id="quantity" name="quantity" required>
        </div>
        <div class="form-group">
            <label for="total_price">Total Harga</label>
            <input type="number" class="form-control" id="total_price" name="total_price" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection