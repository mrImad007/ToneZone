<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Music extends Model
{
    use HasFactory;

    protected $fillable = ['music_name', 'artist_group', 'music_image', 'music_audio'];

    public function playlistMusic() {
        return $this->hasMany(PlaylistMusic::class, 'music_id');
    }

    public function musicLike() {
        return $this->hasMany(MusicLike::class, 'music_id');
    }

    public function comment() {
        return $this->hasMany(Comment::class,'music_id');
    }
}
