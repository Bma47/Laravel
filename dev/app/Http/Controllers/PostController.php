<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use App\Category;
use Session;
use Purifier;
use Image;

class PostController extends Controller
{

    public function index()
    {

    }
    public function create()
    {
return view('');    }
    public function store(Request $request )
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'topic_count' => 'required'
        ]);

        // Create a new Thread record in the database
        Thread::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'topic_count' => $request->input('topic_count')
        ]);
        Post::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);

        return redirect()->route('threads.index')->with('success', 'Thread created successfully');


    }

    public function show($id)
    {
    return view('home.index' , [
        'thread'=> Thread::findOrFail($id)
    ]);
    }
    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
