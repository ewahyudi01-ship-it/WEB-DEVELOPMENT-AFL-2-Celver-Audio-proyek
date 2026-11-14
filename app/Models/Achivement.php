<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Achivement extends Model
{
    protected $fillable = [
        'titleDesc',
        'subTitleDesc',
        'desc',
    ];
}