<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $table = 'educations'; // This is your table name

    protected $fillable = [
        
        'degree_title',
        'year_completion',
        'institute',
        'city',
        'user_id',
        'cgpa_percentage',
        'is_percentage',
        // 'profile_id', // Ensure to include profile_id if needed
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
