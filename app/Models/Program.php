<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{

    use HasFactory;


    protected $guarded = [
        'id',
    ];

    public $timestamps = false;

    public function programRequirements()
    {
        return $this->hasMany(ProgramRequirement::class)
            ->orderBy('name');
    }


    public function universities()
    {
        return $this->hasMany(University::class);
    }
}
