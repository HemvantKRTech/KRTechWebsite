<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'twitter_link',
        'instagram_link',
        'facebook_link',
        'linkedin_link'
    ];
    public function skill(): HasMany
    {
        return $this->hasMany(Skill::class);
    }
}
