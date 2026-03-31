<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $table = 'notes';
    protected $fillable = [
        "title",
        "description",
        "deadline",
        "done"
    ];
    
    protected $casts = [
        "deadline" => "date"
    ];
    protected $hidden = [];
}
