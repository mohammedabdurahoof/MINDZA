<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    protected $fillable = [
        'courseName',
        'teacherId',
        'category',
        'duration',
        'price',
        'courseSummery',
        'requirements',
        'image'
    ];
}
