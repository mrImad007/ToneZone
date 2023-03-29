<?php

namespace App\Http\Controllers;

use App\Models\Band;
use App\Models\User;
use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardsController extends Controller
{
    // public function index() {
    //     return view('Dash.statistique');
    // }

    public function index() {
        $admins = User::all()->where('role', '1')->count();
        // $artists = Artist::all()->count();
        // $bands = Band::all()->count();
        return view('Dash.statistique', compact('admins'));
    }
    
    public function music() {
        $musics = DB::table('music')->get();
        return view('Dash.musics', [
            'musics' => $musics
        ]);
    }
    public function artist() {
        $artists = DB::table('artists')->get();
        return view('Dash.artist', [
            'artists' => $artists
        ]);
    }
    public function band() {
        $bands = DB::table('bands')->get();
        return view('Dash.band', [
            'bands' => $bands
        ]);
    }
}
