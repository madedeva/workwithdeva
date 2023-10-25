<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function __construct() {
        $this->middleware(['auth', 'verified']);
    }

    public function index(){
        $blogs = Blog::all();
        return view('admin.blog.index', compact('blogs'));
    }

    public function create(){
        return view('admin.blog.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png',
        ]);

        $image = $request->file('image');
        $image->storeAs('public/blogs', $image->hashName());

        Blog::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $image->hashName(),
        ]);

        return redirect()->route('admin.blog')->with('success', 'Blog created successfully');
    }

    public function edit($id){
        $blog = Blog::find($id);
        return view('admin.blog.edit', compact('blog'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'content' => 'required',
            'image' => 'mimes:jpg,jpeg,png',
        ]);

        $blog = Blog::find($id);

        if($request->file('image') == "") {

            $blog->update([
                'title' => $request->title,
                'excerpt' => Str::limit(strip_tags($request->content), 100),
                'content' => $request->content,
            ]);

        } else {

            $image = $request->file('image');
            $image->storeAs('public/blogs', $image->hashName());

            $blog->update([
                'title' => $request->title,
                'content' => $request->content,
                'image' => $image->hashName(),
            ]);

        }

        return redirect()->route('admin.blog')->with('success', 'Blog updated successfully');
    }

    public function destroy($id){
        $blog = Blog::find($id);
        $blog->delete();

        return redirect()->route('admin.blog')->with('success', 'Blog deleted successfully');
    }
}
