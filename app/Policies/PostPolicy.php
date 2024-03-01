<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;

class PostPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
    //only post owner/admin/editor can delete
    public function delete(User $user, Post $post)
    {
        // Check post ownership, or user is an admin or editor
        return $user->id === $post->user_id || $user->isAdmin() || $user->isEditor();
    }
}
