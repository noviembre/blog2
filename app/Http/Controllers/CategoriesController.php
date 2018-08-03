<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{

    
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
        return redirect()->back();
    }
}
