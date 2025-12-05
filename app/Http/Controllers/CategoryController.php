<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::get();
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {

    }
    public function show($id)
    {
        return Category::find($id);
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {

    }
    public function destroy($id)
    {

        
    }
}
