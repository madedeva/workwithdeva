<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function __construct() {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        $about = About::all();
        return view('admin.about', compact('about'));
    }

    public function edit($id){
        $about = About::find($id);
        return view('admin.edit-about', compact('about'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'birthday' => '',
            'website' => '',
            'phone' => '',
            'city' => '',
            'age' => '',
            'degree' => '',
            'email' => '',
            'freelance' => '',
            'about' => '',
        ]);

        $about = About::find($id);
        $about->birthday = $request->birthday;
        $about->website = $request->website;
        $about->phone = $request->phone;
        $about->city = $request->city;
        $about->age = $request->age;
        $about->degree = $request->degree;
        $about->email = $request->email;
        $about->freelance = $request->freelance;
        $about->about = $request->about;
        $about->save();

        return redirect()->route('admin.about')->with('success', 'About has been updated successfully!');
    }
}
