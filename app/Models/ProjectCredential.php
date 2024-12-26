<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectCredential extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'title',
        'creds',
        'is_valid',
    ];

    protected $casts = [
        'is_valid' => 'boolean',
        'creds' => 'array'
    ];
}
