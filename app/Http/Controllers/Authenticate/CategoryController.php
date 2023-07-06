<?php

namespace App\Http\Controllers\Authenticate;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CategoryController extends Controller
{

    public function index(Request $request)
    {

        $categories = Category::all();
        return view('admin.authentication.layouts.pages.category.show', compact('categories'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);
        dd($request);
        $category = Category::create($request->all());

        //return redirect()->route('admin.category.index');
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $category->update($request->all());

    }

    public function delete(Category $category)
    {
        $category->delete();
    }
}
