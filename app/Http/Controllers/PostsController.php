<?php

namespace App\Http\Controllers;
use App\Post;
use Auth;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function index(){
        $posts = Post::paginate(5);
        return view('posts.index',['posts'=>$posts]);
    }


    public function favoritePost(Post $post){
        Auth::user()->favorites()->attach($post->id);
        return back();
    }


    public function unFavoritePost(Post $post){
        Auth::user()->favorites()->detach($post->id);
        return back();
    }


}
