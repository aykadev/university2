<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    
    protected $guarded = [
        'id',
    ];


    public function universities()
    {
        return $this->hasMany(University::class);
    }
}
