<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TalentType extends Model
{

    protected $fillable = [
        'name',
        'slug',
        'description',
    ];
}
