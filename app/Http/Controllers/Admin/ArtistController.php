<?php

namespace App\Http\Controllers\Admin;

use App\Models\Label;
use App\Models\Artist;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArtistStoreRequest;
use App\Http\Requests\ArtistUpdateRequest;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artists = Artist::with('label')
            ->orderByDesc('id')
            ->get();
        $labels = Label::orderByDesc('id')->get();

        return view('admin.index', compact('artists', 'labels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $labels = Label::orderByDesc('id')->get();

        return view('admin.create', compact('labels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArtistStoreRequest $request)
    {
        $data = [
            'artista' => $request->artista,
            'nazionalita' => $request->nazionalita,
            'description' => $request->description,
            'img_url' => $request->img_url,
            'prossimo_concerto' => $request->prossimo_concerto,
            'ultimo_album' => $request->ultimo_album,
            'ultimo_singolo' => $request->ultimo_singolo,
            'label_id' => $request->label_id,
        ];

        Artist::create($data);
        return to_route('artists.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artist $artist
     * @return \Illuminate\Http\Response
     */
    public function show(Artist $artist)
    {
        return view('admin.show', compact('artist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artist $artist
     * @return \Illuminate\Http\Response
     */
    public function edit(Artist $artist)
    {
        $labels = Label::orderByDesc('id')->get();
        return view('admin.edit', compact('artist', 'labels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Artist $artist
     * @return \Illuminate\Http\Response
     */
    public function update(ArtistUpdateRequest $request, Artist $artist)
    {
        $data = [
            'artista' => $request->artista,
            'nazionalita' => $request->nazionalita,
            'description' => $request->description,
            'img_url' => $request->img_url,
            'prossimo_concerto' => $request->prossimo_concerto,
            'ultimo_album' => $request->ultimo_album,
            'ultimo_singolo' => $request->ultimo_singolo,
            'label_id' => $request->label_id,
        ];

        $artist->update($data);
        return redirect()->route('artists.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Artist $artist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artist $artist)
    {
        $artist->delete();

        return redirect()
            ->route('artists.index')
            ->with('message', 'Artist deleted');
    }
}
