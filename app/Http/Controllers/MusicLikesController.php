<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Music;
use App\Models\MusicLike;
use Illuminate\Http\Request;

class MusicLikesController extends Controller
{
    public function likeMusic(Music $music, User $user) {
        $formField = [
            'music_id' => $music->id,
            'user_id' => $user->id
        ];

        MusicLike::create($formField);
        return back()->with('message', 'music liked');
    }

    public function unlikeMusic(Music $music, User $user) {
        // get the row of musicLike with elequent method firstOrFail that return 404 if there is no row found
        $userMusicLike = MusicLike::where('music_id', '=', $music->id)->firstOrFail();
        // $userMusicLike = User::find($user->id)->musicLike->where('music_id', '=', $music->id);
        $userMusicLike->delete();
        return back()->with('message', 'music unliked U_U');
    }
}
