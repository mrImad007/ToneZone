<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaylistMusic extends Model
{
    use HasFactory;

    protected $table = 'playlist_musics';
    
    public function music() {
        return $this->belongsTo(Music::class, 'music_id');
    }
    public function playlist() {
        return $this->belongsTo(Playlist::class, 'playlist_id');
    }
}
