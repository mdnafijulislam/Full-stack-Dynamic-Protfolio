<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        Setting::truncate();

        Setting::create([
            'full_name'     => 'Md. Nafijul Islam',
            'title'         => 'Full Stack Web Developer',
            'about_text'    => 'I build modern and responsive websites using HTML, CSS, JS, Laravel, and Java Spring Boot.',
            'photo'         => 'avatar.jpg',
            'facebook'      => 'https://facebook.com/yourprofile',
            'instagram'     => 'https://instagram.com/yourprofile',
            'github'        => 'https://github.com/yourprofile',
            'linkedin'      => 'https://linkedin.com/in/yourprofile',
        ]);
    }
}
