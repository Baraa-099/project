<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialProperty extends Model
{
    use HasFactory;
    protected $table = 'special_properties'; 

    protected $fillable = ['number', 'description'];
}
