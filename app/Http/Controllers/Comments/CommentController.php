<?php

namespace App\Http\Controllers\Comments;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    /**
     * Retrieval of comments is happening in the homecontroller
     * method(single_post) that displays single post + its comments.
     *
     * We also do not require create method here since in single_post view,
     * we show a comment for that sends create_comment_request directly to
     * the store function below.
     */




    /**
     * Store a new comment in the database.
     */
    public function store(Request $request)
    {
        //dd($request);
        // Validate the incoming request data
        $validatedData = $request->validate([
            'post_id' => 'required|exists:posts,id',
            'parent_comment_id' => 'nullable|exists:comments,id',
            'content' => 'required|string|max:255',
        ]);
        //dd($validatedData);

        // Create a new comment instance with the validated data
        $comment = new Comment();
        $comment->user_id = auth()->user()->id;
        $comment->post_id = $validatedData['post_id'];
        $comment->parent_comment_id = $validatedData['parent_comment_id'];
        $comment->content = $validatedData['content'];

        // Save the new comment to the database
        $comment->save();

        // Redirect the user back to the post_view
        return redirect()->back()->with('success', 'Comment added successfully!');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update an existing comment.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Delete a comment.
     */
    public function destroy(Comment $comment)
    {
        //dd($comment);
        $comment->delete();

        return redirect()->back()->with('success', 'Comment deleted successfully');
    }
}
