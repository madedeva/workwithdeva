<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Skill;
use App\Models\Resume;
use App\Models\Portfolio;
use App\Models\Message;
use App\Models\Blog;

class GuestController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function about(){
        
        $about = About::first();
        $skill = Skill::all();
        
        // $skill_first = Skill::orderBy('id', 'desc')->take(3)->get();
        // $skill_last = Skill::orderBy('id', 'desc')->skip(3)->take(4)->get();

        return view('public.about', compact('about', 'skill'));
    }

    public function resume(){

        $resume_education = Resume::where('type', '0')->get();
        $resume_experience = Resume::where('type', '1')->get();
        
        return view('public.resume', compact('resume_education', 'resume_experience'));
    }

    public function portfolio(){

        $category = Portfolio::select('category_id')->distinct()->get();

        $portfolio = Portfolio::all();

        return view('public.portfolio', compact('category', 'portfolio'));
    }

    public function portfolioDetails($id){
            
            $portfolio = Portfolio::find($id);
    
            return view('public.portfolio-details', compact('portfolio'));
    }

    
    public function contact(){
        return view('public.contact');
    }

    public function storeMessage(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject, 
            'message' => $request->message
        ]);

        return redirect()->back()->with('success', 'Message sent successfully');
    }


    // CV Controller
    public function uploadCv(Request $request){
        $request->validate([
            'cv' => 'required|mimes:pdf|max:2048'
        ]);

        $file = $request->file('cv');
        $fileName = time().'_'.$file->getClientOriginalName();
        $filePath = $request->file('cv')->storeAs('files', $fileName, 'public');

        About::where('id', 1)->update([
            'cv' => $fileName
        ]);

        return redirect()->back()->with('success', 'CV uploaded successfully');
    }

    public function updatecv(Request $request){
        $request->validate([
            'cv' => 'required|mimes:pdf|max:2048'
        ]);

        $file = $request->file('cv');
        $fileName = time().'_'.$file->getClientOriginalName();
        $filePath = $request->file('cv')->storeAs('files', $fileName, 'public');

        About::where('id', 1)->update([
            'cv' => $fileName
        ]);

        return redirect()->back()->with('success', 'CV updated successfully');
    }

    public function downloadCv(){
        $file = public_path()."/files/cvdevakertiwijaya.pdf";
        $headers = array(
            'Content-Type: application/pdf',
        );
        return response()->download($file, 'cvdevakertiwijaya.pdf', $headers);
    }

    public function showblog(){
        $blog = Blog::all();
        return view('public.blog', compact('blog'));
    }
}
