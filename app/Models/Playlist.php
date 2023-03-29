<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Playlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function playlistMusic() {
        return $this->hasMany(PlaylistMusic::class, 'playlist_id');
    }
}
