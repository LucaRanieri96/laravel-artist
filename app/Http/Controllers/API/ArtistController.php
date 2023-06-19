<?php

namespace App\Http\Controllers\API;

use App\Models\Artist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArtistController extends Controller
{
    public function index()
    {
        $artists = Artist::orderByDesc('id')->get();

        return response()->json([
            'success' => true,
            'result' => $artists,
        ]);
    }
}
