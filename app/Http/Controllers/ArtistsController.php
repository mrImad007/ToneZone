<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class ArtistsController extends Controller
{
    // show artist from
    public function artistForm() {
        return view('Dash.admin.artist-form');
    }
    // store the artist
    public function storeArtist(Request $request) {
        $formField = $request->validate([
            'artist_name' => 'required',
            'city' => 'required',
            'age' => 'required',
            'image' => 'required'
        ]);
        
        $uploadImage = Cloudinary::uploadFile($request->file('image')->getRealPath(),[
            'folder' => 'Artist Image'
        ])->getSecurePath();

        $formField['image'] = $uploadImage;

        Artist::create($formField);

        return redirect('/admin/artist')->with('message', 'Artist created Succesfully ^^');
    }

    // edit artist from
    public function editArtistForm(Artist $artist) {
        return view('Dash.admin.artist-edit', [
            'artist' => $artist
        ]);
    }

    // store the edit artist
    public function storeEditArtist(Request $request, Artist $artist) {
        
        // validate the formfield
        $formField = $request->validate([
            'artist_name' => 'required',
            'city' => 'required',
            'age' => 'required',
            'image' => ''
        ]);

        if ($request->hasFile('image')) {
            $uploadImage = Cloudinary::uploadFile($request->file('image')->getRealPath(),[
                'folder' => 'Artist Image'
            ])->getSecurePath();
            $formField['image'] = $uploadImage;
        } else {
            $formField['image'] = $artist->image;
        }

        $artist->update($formField);

        return redirect('/admin/artist')->with('message', 'Artist Updated successfuly ^^');
    }


    public function deleteArtist(Artist $artist) {
        $artist->delete();
        return back()->with('message', 'Artist deleted succcesfuly U_U');
    }
}
