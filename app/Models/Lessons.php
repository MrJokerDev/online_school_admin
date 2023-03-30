<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lessons extends Model
{
    use HasFactory;

    protected $table = 'lessons';

    protected $fillable = [
        'id', 
        'course_id',
        'level_id',
        'title', 
        'description',
        'lesson_video'
    ];
}