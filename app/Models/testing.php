<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testing extends Model
{
    /** @use HasFactory<\Database\Factories\TestingFactory> */
    use HasFactory;

    protected $fillable = ['brands', 'model','processor','ram'];
}
