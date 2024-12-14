<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        // return view('post.index', ['posts' => $posts]);
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'phone' => 'required',
            'alamat' => 'required',
            'appatizer' => 'nullable',
            'mainc' => 'nullable',
            'dessert' => 'nullable',
            'drink' => 'nullable'
            ]);
            $post = Post::create($validated);
            return redirect()->route('posts.index')->with('success', 'Pesanan berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        return view('post.edit', ['post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required|unique:posts|max:150',
            'phone' => 'required',
            'alamat' => 'required',
            'appatizer' => 'nullable',
            'mainc' => 'nullable',
            'dessert' => 'nullable',
            'drink' => 'nullable'
            ]);
            $post = Post::findOrFail($id);
            $post->update($validated);
            return redirect()->route('posts.index')->with('success', 'Pesanan berhasil diperbarui!');
            // $post = Post::find($id)->update($request->all());
            // return back()->with('success',' Data telah diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        $post->delete();
        return back()->with('success',' Penghapusan berhasil.');
    }
}
