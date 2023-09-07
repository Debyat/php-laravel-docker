<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Widget extends Model
{
    protected $fillable = [
        'html',
        'css',
        'javascript',
        'title',
        'description',
        'image',
        'status'
    ];
}
