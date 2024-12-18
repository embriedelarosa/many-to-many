<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Progress extends Model
{
    use HasFactory;

    protected $table = 'progresses';
    protected $fillable = ['completion_percentage'];

    public function chapters()
    {
        return $this->belongsToMany(Chapter::class, 'chapter_progress_table');
    }
}

