<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;

class PortfolioController extends Controller
{
    public function __construct() {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        $portfolio = Portfolio::all();
        return view('admin.portfolio')->with('portfolio', $portfolio);
    }

    public function create()
    {
        $category = PortfolioCategory::all();
        return view('admin.add-portfolio')->with('category', $category);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required',
            'title' => 'required',
            'category_id' => 'required',
            'client' => 'required',
            'project_date' => 'required',
            'project_url' => 'required',
            'description' => 'required'
        ]);

        if ($file = $request->file('image')) {
            $destinationPath = 'img/';
            $profileImage = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        $portfolio = Portfolio::create([
            'image' => $input['image'],
            'title' => $request->title,
            'category_id' => $request->category_id,
            'client' => $request->client,
            'project_date' => $request->project_date,
            'project_url' => $request->project_url,
            'description' => $request->description
        ]);

        return redirect()->route('admin.portfolio')->with('success', 'Portfolio added successfully');
    }

    public function edit($id)
    {
        $category = PortfolioCategory::all();
        $portfolio = Portfolio::find($id);

        return view('admin.edit-portfolio', compact('portfolio', 'category'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'image' => 'required',
            'title' => 'required',
            'category_id' => 'required',
            'client' => 'required',
            'project_date' => 'required',
            'project_url' => 'required',
            'description' => 'required'
        ]);

        if ($file = $request->file('image')) {
            $destinationPath = 'img/';
            $profileImage = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $profileImage);
            $name = "$profileImage";
            $portfolio = Portfolio::find($id);
            if ($portfolio->image) {
                $image_path = public_path() . "/img/" . $portfolio->image;
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }
        }else{
            $portfolio = Portfolio::find($id);
            $name = $portfolio->image;
        }

        $portfolio = Portfolio::find($id);
        $portfolio->update([
            'image' => $name,
            'title' => $request->title,
            'category_id' => $request->category_id,
            'client' => $request->client,
            'project_date' => $request->project_date,
            'project_url' => $request->project_url,
            'description' => $request->description
        ]);

        return redirect()->route('admin.portfolio')->with('success', 'Portfolio updated successfully');
    }

    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);
        if ($portfolio->image) {
            $image_path = public_path() . "/img/" . $portfolio->image;
            if (file_exists($image_path)) {
                unlink($image_path);
            }
        }
        $portfolio->delete();

        return redirect('/dashboard/portfolio')->with('success', 'Portfolio deleted successfully');
    }
}
