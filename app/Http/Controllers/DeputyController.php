<?php

namespace App\Http\Controllers;

use App\Deputy;
use Illuminate\Http\Request;

class DeputyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // URL :   310e1921074643.au.deputy.com
    public function index()
    {
    $url = "310e1921074643.au.deputy.com";

        return redirect($url . '/me');
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
     * @param  \App\DeputyController  $deputyController
     * @return \Illuminate\Http\Response
     */
    public function show(DeputyController $deputyController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DeputyController  $deputyController
     * @return \Illuminate\Http\Response
     */
    public function edit(DeputyController $deputyController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DeputyController  $deputyController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DeputyController $deputyController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DeputyController  $deputyController
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeputyController $deputyController)
    {
        //
    }
}
