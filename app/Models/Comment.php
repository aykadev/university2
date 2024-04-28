<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [
        'id',
    ];

    public $timestamps = false;


    public function universities()
    {
        return $this->hasMany(University::class);
    }
}
