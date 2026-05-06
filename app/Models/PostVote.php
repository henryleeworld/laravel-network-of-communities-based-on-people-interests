<?php

namespace App\Models;

use Database\Factories\PostVoteFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['post_id', 'user_id', 'vote'])]
class PostVote extends Model
{
    /** @use HasFactory<PostVoteFactory> */
    use HasFactory;

    /**
     * Get the post that owns the post vote.
     */
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
