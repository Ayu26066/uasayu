<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Size;
use App\Models\Color;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with(['brand', 'category', 'size', 'color'])->get();
        return view('transactions.index', compact('transactions'));
    }

    public function create()
    {
        $brands = Brand::all();
        $categories = Category::all();
        $sizes = Size::all();
        $colors = Color::all();
        return view('transactions.create', compact('brands', 'categories', 'sizes', 'colors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'brand_id' => 'required|exists:brands,id',
            'category_id' => 'required|exists:categories,id',
            'size_id' => 'required|exists:sizes,id',
            'color_id' => 'required|exists:colors,id',
            'quantity' => 'required|integer|min:1',
            'total_price' => 'required|numeric|min:0',
        ]);

        Transaction::create($request->all());
        return redirect()->route('transactions.index')->with('success', 'Transaksi berhasil ditambahkan.');
    }

    public function edit(Transaction $transaction)
    {
        $brands = Brand::all();
        $categories = Category::all();
        $sizes = Size::all();
        $colors = Color::all();
        return view('transactions.edit', compact('transaction', 'brands', 'categories', 'sizes', 'colors'));
    }

    public function update(Request $request, Transaction $transaction)
    {
        $request->validate([
            'brand_id' => 'required|exists:brands,id',
            'category_id' => 'required|exists:categories,id',
            'size_id' => 'required|exists:sizes,id',
            'color_id' => 'required|exists:colors,id',
            'quantity' => 'required|integer|min:1',
            'total_price' => 'required|numeric|min:0',
        ]);

        $transaction->update($request->all());
        return redirect()->route('transactions.index')->with('success', 'Transaksi berhasil diperbarui.');
    }

    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
        return redirect()->route('transactions.index')->with('success', 'Transaksi berhasil dihapus.');
    }
}