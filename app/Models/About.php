<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'abouts';
    protected $guarded = [];

    function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
