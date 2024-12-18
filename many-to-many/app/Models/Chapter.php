<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chapter extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content'];

    public function progresses()
    {
        return $this->belongsToMany(Progress::class, 'chapter_progress_table');
    }
}

