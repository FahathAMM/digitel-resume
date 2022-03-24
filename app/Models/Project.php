<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $fillable = [
        'user_id',
        'type',
        'link',
        'name',
        'description',
    ];

    use HasFactory;
}
