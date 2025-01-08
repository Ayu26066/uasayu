<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    public function index()
    {
        $sizes = Size::all();
        return view('sizes.index', compact('sizes'));
    }

    public function create()
    {
        return view('sizes.create');
    }

    public function store(Request $request)
    {
        $request->validate(['size' => 'required|string|max:255']);
        Size::create($request->all());
        return redirect()->route('sizes.index')->with('success', 'Ukuran berhasil ditambahkan.');
    }

    public function edit(Size $size)
    {
        return view('sizes.edit', compact('size'));
    }

    public function update(Request $request, Size $size)
    {
        $request->validate(['size' => 'required|string|max:255']);
        $size->update($request->all());
        return redirect()->route('sizes.index')->with('success', 'Ukuran berhasil diperbarui.');
    }

    public function destroy(Size $size)
    {
        $size->delete();
        return redirect()->route('sizes.index')->with('success', 'Ukuran berhasil dihapus.');
    }
}