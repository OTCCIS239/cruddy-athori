<?php

namespace App\Http\Controllers;

use App\Artist;
use Illuminate\Http\Request;

class ArtistsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $artists = Artist::all();
        return view('artists.index', compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artists.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'ArtistName'=>'required'
        ]);

        $artist = Artist::create($request->all());

        return redirect('/artists/' . $artist->id);
    }

    /**
     * Display the specified resource.
     * @param int $id
     * @param  \App\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function show(Artist $artist)
    {
        return view('artists.show', compact('artist'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @param  \App\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function edit(Artist $artist)
    {
        return view('artists.edit', compact('artist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @param  \App\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artist $artist)
    {
        $artist->update($request->all());
        return redirect('/artists/' . $artist->id);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Artist  $artists
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artist $artist)
    {
        $artist->delete();
        return redirect('/artists');
    }
}
