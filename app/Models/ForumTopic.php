<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumTopic extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return "slug";
    }

    public function forums()
    {
        return $this->hasMany(Forum::class, 'forum_topic_id');
    }
}
