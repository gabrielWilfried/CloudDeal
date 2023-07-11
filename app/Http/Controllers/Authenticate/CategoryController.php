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

        Category::create($request->all());
        return redirect()->back()->with('message', 'Category created successfully');

    }

    public function delete(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.category.index')->with('success', 'La catégorie a été supprimée avec succès.');
    }
}
