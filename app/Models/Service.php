<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'icon',
        'service_name',
        'slug',
        'feature_image',
        'description',
        'content',
    ];
}
