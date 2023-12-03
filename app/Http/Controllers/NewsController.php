<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\News;
use Illuminate\Support\Facades\Redirect;
class NewsController extends Controller
{
    private $columns = [
        'newsTitle',
        'content',
        'published',
        'author'
    ];
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
        // $news= new News;
        // $news->newsTitle = $request->newsTitle;
        // $news->content = $request->content;

        // if (isset($request->published)) {
        //     $news->published = true;
        // } 
        // else {
        //     $news->published = false;
        // }

        // $news->author = $request->author;
        // $news-> save();
        // return "News title : ". $request->newsTitle."<br> News content : ". 
        // $request->content."<br> Is news published ? ".$request->published."<br> News Author : ".$request->author;

        $data = $request->only($this->columns);
        $data['published'] = isset($data['published']) ? true : false;

        $request->validate([
            'newsTitle' => 'required|string|max:50',
            'content' => 'required|string',
            'author' => 'required|string|max:100',
        ]);

        News::create($data);
        return 'done';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = News::findOrFail($id);
        return view('postDetail', compact('post'));
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
        $data = $request->only($this->columns);
        $data['published'] = isset($data['published']) ? true : false;

        News::where('id', $id)->update($data);
        return 'Updated';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):RedirectResponse
    {
        News::where('id', $id)->delete();
        return redirect('trashedPosts');
    }
    public function trashed()
    {
        $posts = News::onlyTrashed()->get();
        return view('trashedPosts', compact('posts'));
    }
    public function restore(string $id): RedirectResponse
    {
        News::where('id', $id)->restore();
        return redirect('posts');
    }
    public function forceDelete(string $id): RedirectResponse
    {
        News::where('id', $id)->forceDelete();
        return redirect('trashedPosts');
    }
}
