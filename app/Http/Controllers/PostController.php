<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(6);
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post/create');
    }

    public function store(PostRequest $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return redirect('post')->with('success', 'A post was created successfully.');
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('post.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('post/edit', compact('post')); 
    }

    public function update(PostRequest $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return redirect('post');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('post');
    }
}
