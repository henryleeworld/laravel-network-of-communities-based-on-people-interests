<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PostVote extends Model
{
    /** @use HasFactory<\Database\Factories\PostVoteFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = ['post_id', 'user_id', 'vote'];

    /**
     * Get the post that owns the post vote.
     */
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
