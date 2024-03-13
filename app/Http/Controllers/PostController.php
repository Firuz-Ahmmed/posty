<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts=Post::latest()->with('user','likes')->paginate(5);
        return view('posts.index',[
            'posts'=> $posts
        ]);
    }
    public function show(Post $post){
        return view('posts.show',[
            'post'=>$post
        ]);
    }
    public function store(Request $request){
       // dd($request->all());
        $this->validate($request,[
           'body'=>'required'
        ]);
        // Post::create([
        //     'user_id'=>auth()->id(),
        //     'body'=>$request->body
        // ]);
        $request->user()->posts()->create($request->only('body'));
        return back();
    }
    public function destroy(Post $post){
        $this->authorize('delete',$post);
        $post->delete();
        return back();
    }
}
