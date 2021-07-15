<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lores extends Model
{
    use HasFactory;
    protected $fillable=['text','title'];
    protected $dates =['updated_at','created_at'];
}
