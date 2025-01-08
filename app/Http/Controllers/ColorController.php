<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index()
    {
        $colors = Color::all();
        return view('colors.index', compact('colors'));
    }

    public function create()
    {
        return view('colors.create');
    }

    public function store(Request $request)
    {
        $request->validate(['color' => 'required|string|max:255']);
        Color::create($request->all());
        return redirect()->route('colors.index')->with('success', 'Warna berhasil ditambahkan.');
    }

    public function edit(Color $color)
    {
        return view('colors.edit', compact('color'));
    }

    public function update(Request $request, Color $color)
    {
        $request->validate(['color' => 'required|string|max:255']);
        $color->update($request->all());
        return redirect()->route('colors.index')->with('success', 'Warna berhasil diperbarui.');
    }

    public function destroy(Color $color)
    {
        $color->delete();
        return redirect()->route('colors.index')->with('success', 'Warna berhasil dihapus.');
    }
}