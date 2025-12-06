<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Setting;

class PortfolioController extends Controller
{
    public function home()
    {
        // Load dynamic about/hero section data
        $settings = Setting::first();

        // Load dynamic sections
        $skills    = Skill::orderBy('percentage', 'desc')->get();
        $services  = Service::all();
        $projects  = Portfolio::latest()->get();

        // Return view with all data
        return view('home', compact('settings', 'skills', 'services', 'projects'));
    }

    public function portfolio()
    {
        $projects = Portfolio::latest()->get();
        return view('portfolio', compact('projects'));
    }
}
