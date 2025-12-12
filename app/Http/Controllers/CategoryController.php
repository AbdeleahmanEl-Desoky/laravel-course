<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Client\ResponseSequence;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();

        return view('dashboard.category.index',compact('categories'));
    }
    public function create()
    {
        return view('dashboard.category.create');
    }
    public function store(Request $request)
    {
       Category::create([
        'name_ar' => $request->name_ar,
        'name_en' => $request->name_en,
        'description_ar' => $request->description_arabic, 
        'description_en' => $request->description_en,
       ]);

       return redirect()->route('categories.index');
    }
    public function show($id)
    {
        Category::find($id);
    }
    public function edit($id)
    {

        $category = Category::find($id);

        return view('dashboard.category.edit',compact('category'));
    }
    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        $category->update([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'description_ar' => $request->description_ar, 
            'description_en' => $request->description_en,
        ]);
        
        return redirect()->route('categories.index');
    }
    public function destroy($id)
    {

        
    }
}
