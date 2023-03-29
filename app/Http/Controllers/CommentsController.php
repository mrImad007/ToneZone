<?php

namespace App\Http\Controllers;

use App\Models\Music;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function storeComment(Request $request, Music $music) {
        Comment::create([
            'user_id' => auth()->id(),
            'music_id' => $music->id,
            'commentaire' => $request->all()['commentaire']
        ]);
        
        return back()->with('message', 'comment submited');
    }
}
