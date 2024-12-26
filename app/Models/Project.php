<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'about',
        'technologies',
        'tags',
        'github_link',
        'images',
    ];

    protected $casts = [
        'images' => 'array',
    ];
}
