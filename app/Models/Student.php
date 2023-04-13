<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'students';

    protected $fillable = [
        'nis',
        'name',
        'class_room',
        'score_subject'
    ];
}
