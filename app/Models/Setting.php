<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'full_name', 'title', 'about_text', 'photo',
        'facebook', 'instagram', 'github', 'linkedin'
    ];
}
