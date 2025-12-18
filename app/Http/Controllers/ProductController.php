<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * READ: Menampilkan semua produk
     */
    public function index()
    {
        $products = Product::with('category')->get();
        return view('product.index', compact('products'));
    }

    /**
     * CREATE: Form tambah produk
     */
    public function create()
    {
        $categories = Category::all();
        return view('product.create', compact('categories'));
    }

    /**
     * STORE: Simpan produk baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);

        Product::create($request->only(['name', 'description', 'price', 'category_id']));

        return redirect()
            ->route('products.index')
            ->with('success', 'Product Added Successfully');
    }

    /**
     * READ: Form detail produk (optional)
     */
    public function show($id)
    {
        $product = Product::with('category')->findOrFail($id);
        return view('product.show', compact('product'));
    }

    /**
     * UPDATE: Form edit produk
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();

        return view('product.edit', compact('product', 'categories'));
    }

    /**
     * UPDATE: Simpan perubahan
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->only(['name', 'description', 'price', 'category_id']));

        return redirect()
            ->route('products.index')
            ->with('success', 'Product Updated Successfully!');
    }

    /**
     * DELETE: Hapus produk
     */
    public function destroy($id)
    {
        Product::findOrFail($id)->delete();

        return redirect()
            ->route('products.index')
            ->with('success', 'Product Deleted Successfully!');
    }
}
