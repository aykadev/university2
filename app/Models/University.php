<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public $timestamps = false;


    public function location()
    {
        return $this->belongsTo(Location::class);
    }


    public function programs()
    {
        return $this->hasMany(Program::class);
    }


    public function programRequirements()
    {
        return $this->hasMany(ProgramRequirement::class);
    }


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
