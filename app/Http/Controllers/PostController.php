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

        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $path = '/images';
        $imagePath = public_path($path);
        $image->move($imagePath, $imageName);

        // Mass Assigment
        Post::create([
            'title' => $request->title,
            'image' => $path . '/' . $imageName,
            'content' => $request->content,
        ]);

        // Post::create($request->all());


        //=========================//
        // $post = new Post();
        // $post->title = $request->title;
        // $post->content = $request->content;
        // $post->save();
        return redirect('post')->with('success', 'A post was created successfully.');
    }

    public function show($id)
    {
        // $post = Post::find($id);
        // if(! $post) {
        //     abort(404, 'Ma Shi');
        // }

        $post = Post::findOrFail($id);

        return view('post.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('post/edit', compact('post')); 
    }

    public function update(PostRequest $request, $id)
    {
        // $post = Post::find($id);
        // $post->update($request->all());

        Post::find($id)->update($request->all());


        // $post = Post::find($id);
        // $post->title = $request->title;
        // $post->content = $request->content;
        // $post->save();
        return redirect('post');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        if($post->image) {
            unlink(public_path($post->image));
        }
        $post->delete();
        return redirect('post');
    }
}
