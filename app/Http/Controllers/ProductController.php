<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('admin.products.index' , compact('products','categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories') );
    }

    public function store(request $request)
    {


        $validated = $request->validate([
            'name' => 'required|min:5',
            'price' => 'required',
            'quantity' => 'required',
        ], [
            'name.required' => 'إسم المنتج مطلوب',
            'price.required' => 'ادخل السعر',
            'quantity.required' => 'ادخل الكمية',
        ]);
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->category_id = $request->category_id;
        $product->descrption = $request->descrption;
        $product->save();
       return redirect(url('admin/products'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('admin.products.edit', compact('products' , 'categories'));
    }

    public function update(request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|min:5',
            'price' => 'required',
            'quantity' => 'required',
        ], [
            'name.required' => 'إسم المنتج مطلوب',
            'price.required' => 'ادخل السعر',
            'quantity.required' => 'ادخل الكمية',
        ]);
        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->category_id = $request->category_id;
        $product->descrption = $request->descrption;
        $product->save();
        return redirect(url('admin/products'));
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back();
    }
}
