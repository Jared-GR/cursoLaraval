<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sim extends Model
{
    public function phone(): BelongsTo
    {
        return $this->BelongsTo(Phone::class);
    }
}
