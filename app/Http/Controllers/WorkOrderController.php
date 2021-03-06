<?php

namespace App\Http\Controllers;

use App\WorkOrder;
use Illuminate\Http\Request;

class WorkOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workorders = WorkOrder::all();
        //dd($workorders);
        return view('work_orders.index', compact('workorders'));
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
     * @param  \App\Workorder  $workorder
     * @return \Illuminate\Http\Response
     */
    public function show(Workorder $workorder)
    {
        //dd($workorder);
        return view('work_orders.show', ['workorder' => $workorder]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Workorder  $workorder
     * @return \Illuminate\Http\Response
     */
    public function edit(Workorder $workorder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Workorder  $workorder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Workorder $workorder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Workorder  $workorder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workorder $workorder)
    {
        //
    }
}
