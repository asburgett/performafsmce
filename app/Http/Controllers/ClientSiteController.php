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
        return view('clientsites.home');
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
        //
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
