<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'name',
        'access_token',
        'provider',
        'type',
        'location',
        'depth',
        'sort_by',
        'publish'
    ];
}
