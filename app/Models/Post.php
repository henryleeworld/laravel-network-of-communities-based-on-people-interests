<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['community_id', 'user_id', 'title', 'post_text', 'post_image', 'post_url', 'votes'];

    /**
     * Get the community that owns the post.
     */
    public function community(): BelongsTo
    {
        return $this->belongsTo(Community::class);
    }

    /**
     * Get all of the post votes for the post.
     */
    public function postVotes(): HasMany
    {
        return $this->hasMany(PostVote::class);
    }

    /**
     * Get all of the votes this week for the post.
     */
    public function votesThisWeek(): HasMany
    {
        return $this->hasMany(PostVote::class)
            ->where('post_votes.created_at', '>=', now()->subDays(7));
    }

    /**
     * Get the latest comments for the post.
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class)->latest();
    }
}
