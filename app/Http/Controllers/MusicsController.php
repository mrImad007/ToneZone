<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class MusicsController extends Controller
{
    // method that show form to add a music
    public function musicForm() {
        return view('Dash.admin.music');
    }

    // method that store the music in db
    public function addMusic(Request $request) {
        // validate the formfield
        $formField = $request->validate([
            'music_name' => 'required',
            'music_image' => 'required',
            // 'music_audio' => 'required|mimes:mp3',
            'artist_group' => 'required',
        ]);

        // store the audio and image into cloudinary
        $uploadAudio = Cloudinary::uploadFile($request->file('music_audio')->getRealPath(),[
            'folder' => 'OTHMANE'
        ])->getSecurePath();
        // $uploadImage = Cloudinary::uploadFile($request->file('music_image')->getRealPath())->getSecurePath();
        $uploadImage['music_image'] = $request->file('music_image')->store('images', 'public');
        // $uploadAudio['music_audio'] = $request->file('music_audio')->store('music', 'public');

        Music::create([
            'music_image' => $uploadImage['music_image'],
            'music_audio' => $uploadAudio,
            'music_name' => $request->music_name,
            'artist_group' => $request->artist_group,
        ]);

        return redirect('/admin/music')->with('message', 'Music succesfully created');
    }

    public function editMusicForm(Music $music) {
        return view('Dash.admin.music-edit', [
            'music' => $music
        ]);
    }
    public function storeEditMusic(Request $request, Music $music) {
        // validate the formfield
        $formField = $request->validate([
            'music_name' => 'required',
            'music_image' => '',
            'music_audio' => 'mimes:mp3',
            'artist_group' => 'required',
        ]);

        if ($request->hasFile('music_image')) {
            $uploadImage = Cloudinary::uploadFile($request->file('music_image')->getRealPath(),[
                'folder' => 'CoverMusic'
            ])->getSecurePath();
            $formField['music_image'] = $uploadImage;
        } else {
            $formField['music_image'] = $music->music_image;
        }
        if ($request->hasFile('music_audio')) {
            $uploadAudio = Cloudinary::uploadFile($request->file('music_audio')->getRealPath(),[
                'folder' => 'Music'
            ])->getSecurePath();
            $formField['music_audio'] = $uploadAudio;
        } else {
            $formField['music_audio'] = $music->music_audio;
        }

        $music->update($formField);

        return redirect('/admin/music')->with('message', 'Music Updated');
    }

    public function removeMusic($id) {
        // dd($id);
        $music = Music::find($id);
        $music->delete();
        return back()->with('message', 'Music deleted');
    }
}
