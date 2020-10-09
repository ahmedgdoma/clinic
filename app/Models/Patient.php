<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'pain_id',
        'first_name',
        'last_name',
        'mobile',
        'birth_date',
        'gender',
        'country',
        'occupation',
    ];
}
