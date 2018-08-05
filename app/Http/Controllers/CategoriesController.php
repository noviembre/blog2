<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Session;
class CategoriesController extends Controller
{

    public function index()
    {
        return view('admin.categories.index')->with('categories', Category::all());
    }


    public function create()
    {
        return view('admin.categories.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required'
        ]);
        $category = new Category();
        $category->title = $request->title;
        $category->save();
        return redirect()->route('categories');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit')->with('category',$category);
    }


    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->title = $request->title;
        $category->save();
        return redirect()->route('categories');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('categories');
    }
}
