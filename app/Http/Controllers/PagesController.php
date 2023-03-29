<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Music;
use App\Models\Artist;
use App\Models\Playlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
     // load all pages
     public function index() {
        $musics = DB::table('music')->get();
        return view('Pages.index', [
            'playlists' => auth()->user() ? auth()->user()->playlist()->get() : "",
            'musics' => $musics
        ]);
    }

    public function playlist() {
        $playlists = User::find(auth()->id())->playlist;
        return view('Pages.playlist', [
            'playlists' => $playlists
        ]);
    }

    public function artist() {
        $playlists = User::find(auth()->id())->playlist;
        $artists = Artist::all();
        return view('Pages.artist', compact('playlists', 'artists'));
    }

    public function signlePlaylist(Playlist $playlist) {
        // $playlists = User::find(auth()->id())->playlist;
        $playlistMusics = DB::table('playlist_musics')
                            ->join('music', 'playlist_musics.music_id' , '=', 'music.id')
                            ->where('playlist_musics.playlist_id', '=', $playlist->id)
                            ->get();
        // dd($playlistMusics);
        // get 
        $user = $playlist->user;

        return view('Pages.singlePlaylist', [
            'playlists' => auth()->user() ? auth()->user()->playlist()->get() : "",
            'playlist' => $playlist,
            'playlistMusics' => $playlistMusics,
            'user' => $user
        ]);
    }

    public function singleMusic(Music $music) {
        $playlists = User::find(auth()->id());
        // find the music that like by loged user return the first row
        $userMusicLiked = User::find(auth()->id())->musicLike->where('music_id' , '=' , $music->id)->first();

        // get all comment on specifique music
        $comments = $music->comment;

        // dd($userMusicLiked->where('music_id' , '=' , $music->id)->first());

        return view('Pages.singleMusic', [
            'playlists' => $playlists ? $playlists->playlist : "",
            'music' => $music,
            'like' => $userMusicLiked ? true : false,
            'comments' => $comments
        ]);
    }

    public function likedMusic() {

        $playlists = User::find(auth()->id());
        // get all music that get like by user loged
        $likedMusic = DB::table('Music_likes')
                        ->join('music', 'music_likes.music_id', '=' , 'music.id')
                        ->where('music_likes.user_id', '=', auth()->id())
                        ->get();
        // dd($likedMusic);

        return view('Pages.likedMusics', [
            'likedMusic' => $likedMusic,
            'playlists' => $playlists ? $playlists->playlist : "",
        ]);
    }
    
}
