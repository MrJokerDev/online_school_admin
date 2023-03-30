<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Courses extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    protected $table = 'courses';
    protected $fillable = [
        'id',
        'courses',
        'level_id'
    ];

    public function level(): BelongsToMany 
    {
        return $this->belongsToMany(Levels::class, 'course_levels', 'courses_id', 'level_id');
    }

}