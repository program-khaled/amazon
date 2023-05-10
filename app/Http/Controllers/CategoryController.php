<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        
        return view('admin.categories.index' , compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create' );
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
        $category = new Category;
        $category->name = $request->name;
        $category->descrption = $request->descrption;
        $category->save();
       return redirect(url('admin/categories'));
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit', compact('category'));
    }

    public function update(request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->descrption = $request->descrption;
        $category->save();
        return redirect(url('admin/categories'));
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->back();
    }
}
