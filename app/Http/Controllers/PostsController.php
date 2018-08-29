<?php

namespace App\Http\Controllers;

use App\Posts;

use DB;

class PostsController extends Controller

{
    function index() 
    {
    	$posts= Posts::latest()->get();
        return view('index', compact('posts'));
    }

    function create() 
    {
    	
		return view('create');
    }

    function show(Posts $post) 
    {
        
        
        return view('posts.show', compact('post'));
    }

  

    public function store()
    {
        $this->validate( request(), [
                'title' => 'required',
                'body' => 'required'
            ]);

        Posts::create([
            'title' => request('title'),
            'body' => request('body')
        ]);

        //Redirect

        return redirect('/');
    }
}
