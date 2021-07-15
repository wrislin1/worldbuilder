<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worlds extends Model
{
    use HasFactory;

    protected $fillable =  [
        'name',
        'description'
    ];

    protected $dates = ['created_at', 'deleted_at'];
}
