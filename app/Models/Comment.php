<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = "comments";
    protected $fillable = [
        'name',
        'bog_id',
        'email',
        'phone',
        'option',
        'message',
        'admin_approval',
    ];
}
