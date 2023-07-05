<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Skill;
use App\Models\Resume;
use App\Models\PortfolioCategory;
use App\Models\Portfolio;
use App\Models\Message;

class DashboardController extends Controller
{
    public function __construct() {
        $this->middleware(['auth', 'verified']);
    }

    public function index(About $about)
    {
        $about = About::all();
        
        $skill = Skill::count();

        $resume = Resume::count();

        $portfolio = Portfolio::count();

        $skillchart = Skill::all();

        $new_message = Message::where('status', '0')->count();

        return view('admin.dashboard', compact('about', 'skill', 'resume', 'portfolio', 'new_message'));
    }

    public function edit($id){
        $about = About::find($id);
        return view('admin.edit-about', compact('about'));
    }
}
