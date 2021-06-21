<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;
    protected $guarded = [];
    // public function getRouteKeyName()
    // {
    //     return "slug";
    // }
    public function forumtopics()
    {
        return $this->belongsTo(ForumTopic::class, 'forum_topic_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function forumcomments()
    {
        return $this->hasMany(ForumComment::class, 'forum_post_id');
    }
}
