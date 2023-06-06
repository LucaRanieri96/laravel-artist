<?php

namespace App\Http\Controllers\Admin;

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
        $artists = Artist::all();
        return  view('admin.index', compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.create");
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
        'artista'=> $request->artista,
        'nazionalita'=> $request->nazionalita,
        'prossimo_concerto'=> $request->prossimo_concerto,
        'ultimo_album'=> $request->ultimo_album,
        'ultimo_singolo'=> $request->ultimo_singolo,
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
        return view("admin.show", compact("artist"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artist $artist
     * @return \Illuminate\Http\Response
     */
    public function edit(Artist $artist)
    {
        return view("admin.edit", compact("artist"));
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
        'prossimo_concerto' => $request->prossimo_concerto,
        'ultimo_album' => $request->ultimo_album,
        'ultimo_singolo' => $request->ultimo_singolo,
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
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('artists.index')->with("message", "Project deleted");
    }
}
