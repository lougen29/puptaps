<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Careers extends Model
{
    use HasFactory;

    protected $table = 'tbl_careers';
    protected $primaryKey = 'careerID';

    protected $fillable = [
        'userID',
        'job_ad_image',
        'job_name',
        'company',
        'salary',
        'description',
        'category',
        'email',
        'number',
        'approval',
    ];
}
