<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function index()
    {
        $data = Post::all();
        return view('post.index', compact('data'));

    }


    public function create()
    {
        return view('post.create');
    }


    public function store(Request $request)
    {
        Post::create($request->all());
        return redirect('post.index')->with('success','Data inserted successfully.');
    }


    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data=Post::find($id);
        return view('post.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Post::where('id',$request->id)->update(array('title'=>$request->title,
        'description'=>$request->description,));
        return redirect('post.index')->with('success','Data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::where('id',$id)->delete();
        return redirect('post.index')->with('success','post has been deleted successfully!');
    }

}
