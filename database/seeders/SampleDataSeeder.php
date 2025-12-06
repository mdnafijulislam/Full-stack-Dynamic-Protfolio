<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;
use App\Models\Service;
use App\Models\Portfolio;

class SampleDataSeeder extends Seeder
{
    public function run()
    {
        Skill::truncate();
        Service::truncate();
        Portfolio::truncate();

        Skill::create(['name'=>'HTML','percentage'=>95]);
        Skill::create(['name'=>'CSS','percentage'=>90]);
        Skill::create(['name'=>'JavaScript','percentage'=>85]);
        Skill::create(['name'=>'Laravel','percentage'=>80]);

        Service::create(['title'=>'Web Development','icon'=>'fas fa-code','description'=>'Responsive websites with modern tech.']);
        Service::create(['title'=>'UI/UX Design','icon'=>'fas fa-paint-brush','description'=>'User-centered design.']);

        Portfolio::create([
            'title'=>'Personal Portfolio',
            'category'=>'Web',
            'description'=>'Portfolio built using Laravel.',
            'image'=>'project1.jpg',
            'link'=>'#'
        ]);

        Portfolio::create([
            'title'=>'Landing Page',
            'category'=>'Design',
            'description'=>'Beautiful landing page UI.',
            'image'=>'project2.jpg',
            'link'=>'#'
        ]);
    }
}
