<?php

namespace App\Http\Controllers;

use App\Models\Band;
use App\Models\BandMembers;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class BandsController extends Controller
{
    public function createBandForm() {
        return view('Dash.admin.band-form');
    }

    public function editBandForm(Band $band) {
        return view('Dash.admin.band-edit', [
            'band' => $band,
            'band_members' => $band->bandMemebers()->get()
        ]);
    }
    public function storeBand(Request $request) {
        // dd($request->all());
        $formField = $request->validate([
            'band_name' => ['required', Rule::unique('bands', 'band_name')],
            'band_image'=> 'required',
        ]);
        // dd($request->all());

        $uploadImage = Cloudinary::uploadFile($request->file('band_image')->getRealPath(),[
            'folder' => 'Band Image'
        ])->getSecurePath();

        $formField['band_image'] = $uploadImage;

        Band::create($formField);

        $bandId = Band::latest()->first()->id;

        foreach ($request->band_members as $memeber) {
            // dd($memeber);
            $data = [
                'members_name' => $memeber,
                'band_id' => $bandId
            ];
            BandMembers::create($data);
        }

        return redirect('/admin/band')->with('message', 'Band created successfuly ^^');
    }
    public function storeEditBand(Request $request, Band $band) {
        $formField = $request->validate([
            'band_name' => 'required',
            'band_image'=> '',
        ]);
        if ($request->hasFile('band_image')) {
            $uploadImage = Cloudinary::uploadFile($request->file('band_image')->getRealPath(),[
                'folder' => 'Band Image'
            ])->getSecurePath();
            $formField['band_image'] = $uploadImage;
        } else {
            $formField['band_image'] = $band->band_image;
        }

        foreach ($request->id as $key => $memeber_id) {
            // print_r($memeber);
            $data = [
                'members_name' => $request->band_members[$key],
                // 'band_id' => $bandId
            ];
            BandMembers::where('id' , $memeber_id)->update($data);
            // $band->bandMemebers()->update($data);
        }

        $band->update($formField);

        return redirect('/admin/band')->with('message', 'Band updated successfuly ^^');
    }
    public function deleteBand(Band $band) {
        $band->delete();
        return redirect('/admin/band')->with('message', 'band deleted succesfuly U_u');
    }
}
