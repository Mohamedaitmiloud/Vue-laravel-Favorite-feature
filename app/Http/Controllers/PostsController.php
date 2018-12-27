<?php

namespace App\Http\Controllers;
use App\Post;
use Auth;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    // ──────────────────────────────────────── I ──────────
    //   index method return posts paginated by 5 per page 
    // ──────────────────────────────────────────────────
    //

    

    public function index(){
        $posts = Post::paginate(5);
        return view('posts.index',['posts'=>$posts]);
    }

    //
    // ──────────────────────────────────────── II ──────────
    //   favoritePost method to make a post favorited by the auth user
    // ──────────────────────────────────────────────────
    //

    

    public function favoritePost(Post $post){
        Auth::user()->favorites()->attach($post->id);
        return back();
    }

    //
    // ──────────────────────────────────────── III ──────────
    //   unFavoritePost to unfavorite the post by the auth user
    // ──────────────────────────────────────────────────
    //

    

    public function unFavoritePost(Post $post){
        Auth::user()->favorites()->detach($post->id);
        return back();
    }


}
