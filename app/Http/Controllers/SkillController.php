<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    public function __construct() {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        $skills = Skill::all();
        return view('admin.skill')->with('skills', $skills);
    }

    public function create()
    {
        $skills = Skill::all();
        return view('admin.add-skill')->with('skills', $skills);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'percentage' => 'required',
        ]);

        $skill = new Skill();
        $skill->name = $request->name;
        $skill->percentage = $request->percentage;
        $skill->save();

        return redirect()->route('admin.skill')->with('success', 'Skill has been added successfully!');
    }

    public function edit($id)
    {
        $skill = Skill::find($id);
        return view('admin.edit-skill', compact('skill'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => '',
            'percentage' => '',
        ]);

        $skill = Skill::find($id);
        $skill->name = $request->name;
        $skill->percentage = $request->percentage;
        $skill->save();

        return redirect()->route('admin.skill')->with('success', 'Skill has been updated successfully!');
    }

    public function destroy($id)
    {
        $skill = Skill::find($id);
        $skill->delete();

        return redirect()->route('admin.skill')->with('success', 'Skill has been deleted successfully!');
    }
}
