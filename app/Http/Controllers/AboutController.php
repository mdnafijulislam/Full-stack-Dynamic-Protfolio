<?php

namespace App\Http\Controllers;

use App\Models\Setting;

class AboutController extends Controller
{
    public function index()
    {
        // Load settings data
        $settings = Setting::first();

        // Return about view with settings data
        return view('about', compact('settings'));
    }
}
