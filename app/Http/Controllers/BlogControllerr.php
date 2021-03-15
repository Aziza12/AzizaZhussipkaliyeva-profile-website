<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
class BlogControllerr extends Controller
{
    public function index()
    {
      $post=post::all(); 
      return view('post.index')->with(['posts'=>$post]);
    }
    public function store(Request $request){
        POST::create([
            'title'=> $request->title,
            'body'=> $request->body

        ]);
        return back();
    }
}
