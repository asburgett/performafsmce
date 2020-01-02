<?php

namespace App\Http\Controllers;

use App\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$organizations = Organization::all();
        //return view('organizations.index', compact('organizations'));
        return view('organizations.index', ['organizations' => Organization::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // show a view to create a new organization
        return view('organizations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Organization::create($this->validateOrganization());

        return redirect('/organizations');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */

    public function show(Organization $organization)
    {
        return view('organizations.show', ['organization' => $organization]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function edit(Organization $organization)
    {
        return view('organizations.edit', ['organization' => $organization]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    //public function update(Request $request, Organization $organization)
    public function update(Organization $organization)
    {
        $organization->update($this->validateOrganization());

        return redirect('/organizations/'. $organization->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organization $organization)
    {
        //
    }

    protected function validateOrganization()
    {
        return request()->validate([
            'name' => ['required']
        ]);
    }
}
