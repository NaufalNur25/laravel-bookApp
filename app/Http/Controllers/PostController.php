<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
            return view("home", [
                'posts'  => Post::all(),
                'categories' => Category::all()
            ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($title)
    {
        // title
        // slug
        // publisher
        // author
        // excerpt
        // body
        // publish_at
        // filename

        //
            return view('tools');

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
            $request->validate([
                'title'=>'required',
                'slug'=>'required',
                'author'=>'required',
                'publisher'=>'required',
                'publish_at'=>'required',
                'excerpt'=>'required',
                'body'=>'required',
                'filename'=>'required',
                'filename.*'=> 'image|mimes:jpeg,png,jpg|max:2048']);

            $imageName = time().'.'.$request->filename->extension();
            $request->filename->move(storage_path('app').'/public/images/', $imageName);
            Post::create([
                'title'=>$request['title'],
                'slug'=>$request['slug'],
                'author'=>$request['author'],
                'publisher'=>$request['publisher'],
                'publish_at'=>$request['publish_at'],
                'excerpt'=>$request['excerpt'],
                'body'=>$request['body'],
                'filename'=>$imageName]);

            return redirect()->route('home.index')->with('success', 'Book has been added.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('detail', [
            "post" => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        // dd($post);
        return view('tools', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        $request->validate([
            'title'=>'required',
            'slug'=>'required',
            'author'=>'required',
            'publisher'=>'required',
            'publish_at'=>'required',
            'excerpt'=>'required',
            'body'=>'required']);

            $post->title = $request->title;
            $post->slug = $request->slug;
            $post->author = $request->author;
            $post->publisher = $request->publisher;
            $post->publish_at = $request->publish_at;
            $post->excerpt = $request->excerpt;
            $post->body = $request->body;
            if ($request->hasFile('filename')) {
                $imageName = time().'.'.request()->filename->getClientOriginalExtension();
                request()->filename->move(storage_path('app').'/public/images/', $imageName);
                $post->filename = $imageName;
            }
            $post->save();
            return redirect()->route('home.index')->with('success', 'Book has been update.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        $post -> delete();
        return redirect()->route('home.index')->with('success', 'Book has been deleted.');
    }
}
