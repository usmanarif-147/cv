<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'technology_id',
        'question',
        'answer',
        'example',
        'level',
        'type',
        'tags',
    ];

    protected $casts = [
        'tags' => 'array'
    ];

    public function technology()
    {
        return $this->belongsTo(Technology::class);
    }
}
