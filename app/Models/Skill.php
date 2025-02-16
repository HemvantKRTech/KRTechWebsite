<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Skill extends Model
{
    use HasFactory;
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
}
