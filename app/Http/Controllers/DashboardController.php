<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //....the homepage
    public function index()
    {
        $posts = Post::all();

        return view('dashboard.index', compact('posts'));
    }


    //....creating a new post
    public function create()
    {
        return view('dashboard.create');
    }


    //....storing the post to the database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect()->route('dashboard.index');
    }



    //....editing the new post
    public function edit($id)
    {
        $post = Post::find($id);

        return view('dashboard.edit', compact('post'));
    }


    //....deleting the post
    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('dashboard.index');
    }
}
