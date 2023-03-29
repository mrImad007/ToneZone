<?php

namespace App\Http\Controllers;

use App\Models\Music;
use App\Models\Playlist;
use Illuminate\Http\Request;
use App\Models\PlaylistMusic;
use Illuminate\Support\Facades\DB;

class PlaylistMusicsController extends Controller
{
    public function addToPlaylist(Playlist $playlist, Music $music) {
        // dd($playlist, $music);
        $formField = [
            'music_id' => $music->id,
            'playlist_id' => $playlist->id
        ];
        
        PlaylistMusic::create($formField);

        return redirect('/')->with('message', 'Music add to playlist succesfuly');
    }

    public function deletePlaylistMusic($id) {
        // dd($playlistmusic);
        // dd(DB::table('playlist_musics')->where('id_pm', '=' , $id));
        $music = DB::table('playlist_musics')->where('id_pm', '=' , $id);
        $music->delete();
        return back()->with('message', 'Music deleted succesfuly');
    }
}
