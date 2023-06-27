<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortfolioCategory;

class CategoryController extends Controller
{
    public function __construct() {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        $categories = PortfolioCategory::all();
        return view('admin.category')->with('categories', $categories);
    }

    public function create()
    {
        return view('admin.add-category');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        PortfolioCategory::create([
            'name' => $request->name
        ]);

        return redirect()->route('admin.category')->with('success', 'Category added successfully');
    }
 
    public function edit($id)
    {
        $category = PortfolioCategory::find($id);
        return view('admin.edit-category', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => ''
        ]);

        $category = PortfolioCategory::find($id);
        $category->name = $request->name;
        $category->save();

        return redirect()->route('admin.category')->with('success', 'Category updated successfully');
    }

    public function destroy($id)
    {
        $category = PortfolioCategory::find($id);
        $category->delete();

        return redirect()->route('admin.category')->with('success', 'Category deleted successfully');
    }
}
