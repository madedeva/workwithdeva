<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resume;

class ResumeController extends Controller
{
    public function __construct() {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        $resume = Resume::all();
        return view('admin.resume')->with('resume', $resume);
    }

    public function create()
    {
        return view('admin.add-resume');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'year_start' => 'required',
            'year_end' => 'required',
            'company' => 'required',
            'description' => 'required',
            'type' => 'required',
        ]);

        $resume = new Resume();
        $resume->title = $request->input('title');
        $resume->year_start = $request->input('year_start');
        $resume->year_end = $request->input('year_end');
        $resume->company = $request->input('company');
        $resume->description = $request->input('description');
        $resume->type = $request->input('type');
        $resume->save();

        return redirect('/dashboard/resume')->with('success', 'Resume added');
    }

    public function edit($id){
        $resume = Resume::find($id);
        return view('admin.edit-resume', compact('resume'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'year_start' => 'required',
            'year_end' => 'required',
            'company' => 'required',
            'description' => 'required',
            'type' => 'required',
        ]);

        $resume = Resume::find($id);
        $resume->title = $request->input('title');
        $resume->year_start = $request->input('year_start');
        $resume->year_end = $request->input('year_end');
        $resume->company = $request->input('company');
        $resume->description = $request->input('description');
        $resume->type = $request->input('type');
        $resume->save();

        return redirect('/dashboard/resume')->with('success', 'Resume updated');
    }

    public function destroy($id)
    {
        $resume = Resume::find($id);
        $resume->delete();

        return redirect('/dashboard/resume')->with('success', 'Resume deleted');
    }
}
