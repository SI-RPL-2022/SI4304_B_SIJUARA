<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'uh',
        'uts',
        'uas'
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}