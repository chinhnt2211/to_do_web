<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTagNameRequest;
use App\Http\Requests\UpdateTagNameRequest;
use App\Models\TagName;

class TagNameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreTagNameRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTagNameRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TagName  $tagName
     * @return \Illuminate\Http\Response
     */
    public function show(TagName $tagName)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TagName  $tagName
     * @return \Illuminate\Http\Response
     */
    public function edit(TagName $tagName)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTagNameRequest  $request
     * @param  \App\Models\TagName  $tagName
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTagNameRequest $request, TagName $tagName)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TagName  $tagName
     * @return \Illuminate\Http\Response
     */
    public function destroy(TagName $tagName)
    {
        //
    }
}
