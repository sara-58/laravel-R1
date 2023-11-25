<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = News::get();
        return view('posts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("addNews");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $news= new News;
        $news->newsTitle = $request->newsTitle;
        $news->content = $request->content;

        if (isset($request->published)) {
            $news->published = true;
        } 
        else {
            $news->published = false;
        }

        $news->author = $request->author;
        $news-> save();
        return "News title : ". $request->newsTitle."<br> News content : ". 
        $request->content."<br> Is news published ? ".$request->published."<br> News Author : ".$request->author;
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
        $post = News::findOrFail($id);
        return view('updatePost', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
