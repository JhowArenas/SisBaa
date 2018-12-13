<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideosController extends Controller
{
    public function playlists(){
        return view('videos.playlists');
    }
    public function videosAds(){
        return view('videos.videosAds');
    }

}
