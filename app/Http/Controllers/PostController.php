<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "All post show this route";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "This is post create route";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "This route create new post";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "Single Post Show by using id";

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "This is post edit route";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "this route using for update post";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "This route delete post using by id";
    }


}
