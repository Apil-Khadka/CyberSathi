<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function users()
    {
        return $this
            ->belongsToMany(User::class, 'lesson_user')
            ->withTimestamps();
    }

    public function results()
    {
        return $this->hasMany(Result::class);
    }
}
