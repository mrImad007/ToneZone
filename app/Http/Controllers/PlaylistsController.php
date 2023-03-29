<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Playlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class PlaylistsController extends Controller
{
    public function playlistForm() {
        // $playlists = User::find(auth()->user())->playlist;
        return view('users.playlist' , [
            'playlists' => auth()->user() ? auth()->user()->playlist()->get() : ""
        ]);
    }
    public function addPlaylist(Request $request) {
        
        $formField = $request->validate([
            'name' => 'required',
            'image' => ''
        ]);
        if ($request->hasFile('image')) {
            $uploadImage = Cloudinary::uploadFile($request->file('image')->getRealPath(),[
                'folder' => 'Playlist image'
            ])->getSecurePath();
            $formField['image'] = $uploadImage;
        }
        // get the if from the auth helper when login
        $formField['user_id'] = auth()->id();

        Playlist::create($formField);

        return redirect('/playlist')->with('message', 'playlist succesfully created ^^');
    }

    public function editPlaylistForm(Playlist $playlist) {
        // dd($playlist);
        return view('users.playlist-edit', [
            'playlists' => auth()->user() ? auth()->user()->playlist()->get() : "",
            'playlist' => $playlist
        ]);
    }

    public function storeEditPlaylist(Request $request, Playlist $playlist) {
        $formField = $request->validate([
            'image' => '',
            'name' => '',
        ]);

        if ($request->hasFile('image')) {
            $uploadImage = Cloudinary::uploadFile($request->file('image')->getRealPath(),[
                'folder' => 'Playlist image'
            ])->getSecurePath();
            $formField['image'] = $uploadImage;
        }

        $playlist->update($formField);
        return redirect("/playlist/$playlist->id")->with('message', 'playlist updated succesfuly :)');
    }

    public function deletePlaylist(Playlist $playlist) {
        $playlist->delete();
        return redirect('/playlist')->with('message', 'Playlist delete successfuly U_U');
    }
}
