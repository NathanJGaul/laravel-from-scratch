<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function index()
    {
        return Comments::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => ['required', 'integer'],
            'body' => ['required'],
            'post_id' => ['required', 'integer'],
        ]);

        return Comments::create($data);
    }

    public function show(Comments $comments)
    {
        return $comments;
    }

    public function update(Request $request, Comments $comments)
    {
        $data = $request->validate([
            'user_id' => ['required', 'integer'],
            'body' => ['required'],
            'post_id' => ['required', 'integer'],
        ]);

        $comments->update($data);

        return $comments;
    }

    public function destroy(Comments $comments)
    {
        $comments->delete();

        return response()->json();
    }
}
