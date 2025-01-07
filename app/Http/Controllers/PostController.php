<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function post(){
        $post=Post::all();
        return view('frontend.post',compact('post'));
    }
    public function addpost(){
        return view('user_backend.addpost');
    }
    public function poststore(Request $request){
        $post =new Post ;
        if ($request->hasfile('image')) {
            $file = $request->image;
            $extension = $file->getClientOriginalExtension();
            $filename = rand() . '.' . $extension;
            $file->move('frontend/post/', $filename);
            $post->image = $filename;
        }
        $post->heading =$request->heading;
        $post->date =$request->date;
        $post->description =$request->description;
       
        $post->save();
        return back();
    }
}

