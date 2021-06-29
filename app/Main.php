<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    protected $fillable = [
        'title', 'subtitle', 'bc_image','resume'
    ];
}
