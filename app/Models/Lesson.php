<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'lessons';

    protected $fillable = [
        'course_id',
        'title',
        'learn_time',
        'description',
        'requiment',
    ];

    public function users()
    {
        return $this->belongsToMany(Users::class, 'lesson_users');
    }

    public function course()
    {
        return $this->belongsTo(Courses::class, 'course_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'target_id');
    }
}
