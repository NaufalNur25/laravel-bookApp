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
    public function create()
    {
        //
        return view('tambah');
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

        dd($request);
        $request->validate([
            'hotelName' => 'required',
            'location' => 'required',
            'price' => 'required',
            'filename'=>'required',
            'filename.*'=> 'image|mimes:jpeg,png,jpg|max:2048',
            'category' => 'required',
            'desc' => 'required'
        ]);

        $imageName = time().'.'.$request->path->extension();
        $request->path->move(storage_path('app').'/public/images/', $imageName);

        Post::create([
            'hotelName'=>$request['hotelName'],
            'location'=>$request['location'],
            'price'=>$request['price'],
            'filename'=>$request['filename'],
            'filename'=>$imageName,
            'category' =>$request['category'],
            'desc'=>$request['desc']
        ]);
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
            "detail" => $post,
            "detail" => $post
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

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($post)
    {
        //
        $post = Post::find($post);
        $post -> delete();
        return back() -> with('Succses',' Penghapusan data berhasil.');
    }
}
