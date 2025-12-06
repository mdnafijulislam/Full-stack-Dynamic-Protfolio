<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\Service;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    public function home()
    {
        $skills = Skill::orderBy('percentage','desc')->get();
        $services = Service::all();
        $projects = Portfolio::latest()->get();

        return view('home', compact('skills','services','projects'));
    }

    public function portfolio()
    {
        $projects = Portfolio::latest()->get();
        return view('portfolio', compact('projects'));
    }
}
