<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramRequirement extends Model
{

    use HasFactory;

    
    protected $guarded = [
        'id',
    ];

    public $timestamps = false;

    public function program()
    {
        return $this->belongsTo(Program::class);
    }


    public function universities()
    {
        return $this->hasMany(University::class);
    }
}
