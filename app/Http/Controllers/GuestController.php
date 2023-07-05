<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Skill;
use App\Models\Resume;
use App\Models\Portfolio;
use App\Models\Message;

class GuestController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function about(){
        
        $about = About::first();
        
        $skill_first = Skill::orderBy('id', 'desc')->take(3)->get();
        $skill_last = Skill::orderBy('id', 'desc')->skip(3)->take(3)->get();
        return view('public.about', compact('about', 'skill_first', 'skill_last'));
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

    public function downloadCv(){
        $file = public_path()."/files/cv.pdf";
        $headers = array(
            'Content-Type: application/pdf',
        );
        return response()->download($file, 'cv.pdf', $headers);
    }
}
