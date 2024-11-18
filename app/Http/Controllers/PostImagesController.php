<?php

namespace App\Http\Controllers;

use App\Models\PostImages;
use App\Http\Requests\StorePostImagesRequest;
use App\Http\Requests\UpdatePostImagesRequest;

class PostImagesController extends Controller
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
     * @param  \App\Http\Requests\StorePostImagesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostImagesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostImages  $postImages
     * @return \Illuminate\Http\Response
     */
    public function show(PostImages $postImages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostImages  $postImages
     * @return \Illuminate\Http\Response
     */
    public function edit(PostImages $postImages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostImagesRequest  $request
     * @param  \App\Models\PostImages  $postImages
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostImagesRequest $request, PostImages $postImages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostImages  $postImages
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostImages $postImages)
    {
        //
    }
}
