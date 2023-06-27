<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Skill;
use App\Models\Resume;
use App\Models\PortfolioCategory;
use App\Models\Portfolio;

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

        $category = PortfolioCategory::count();

        $portfolio = Portfolio::count();

        $skillchart = Skill::all();

        return view('admin.dashboard', compact('about', 'skill', 'resume', 'category', 'portfolio', 'skillchart'));
    }

    public function edit($id){
        $about = About::find($id);
        return view('admin.edit-about', compact('about'));
    }
}
