<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $table = 'sliders';

    // Specify the attributes that are mass assignable
    protected $fillable = [
        'title',      // The title of the slider
        'image',      // The path to the slider image
        'page_name'   // The name of the page associated with the slider
    ];
}
