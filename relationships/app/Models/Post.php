<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Post extends Model
{
    protected $guarded = [];

    public function image() : MorphOne
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function images() : MorphMany
    {
        return $this->MorphMany(Image::class, 'imageable');
    }
}
