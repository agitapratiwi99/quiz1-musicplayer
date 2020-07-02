<?php

namespace App\Http\Controllers;

use App\Played;
use App\Track;
use Illuminate\Http\Request;

class PlayedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $track = Track::all();
        return view('played/played_tampil', ['track' => $track]);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Played  $played
     * @return \Illuminate\Http\Response
     */
    public function show(Played $played)
    {
        //
        return view('played/show_played', compact('played'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Played  $played
     * @return \Illuminate\Http\Response
     */
    public function edit(Played $played)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Played  $played
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Played $played)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Played  $played
     * @return \Illuminate\Http\Response
     */
    public function destroy(Played $played)
    {
        //
    }
}
