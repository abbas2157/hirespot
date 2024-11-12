<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'company',
        'project_url',
        'tools',
        'user_id',
        'start_date',
        'end_date',
        'description',
    ];
}
