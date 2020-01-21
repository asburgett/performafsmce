<?php

namespace App\Http\Controllers;

use App\ClientSite;
use Illuminate\Http\Request;

class ClientSiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientsites = ClientSite::all();
        return view('clientsites.index', compact('clientsites'));
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
     * @param  \App\ClientSite  $clientSite
     * @return \Illuminate\Http\Response
     */
    public function show(ClientSite $clientSite)
    {
        //dd($clientSite);
        return view('clientsites.show', ['clientsite' => $clientSite]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ClientSite  $clientSite
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientSite $clientSite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ClientSite  $clientSite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClientSite $clientSite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ClientSite  $clientSite
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientSite $clientSite)
    {
        //
    }
}
