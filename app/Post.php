<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Favorite;
use Auth;

class Post extends Model{


    //
    // ──────────────────────────────────────── I ──────────
    //   :::::: favorited method return true if this post favorited by the auth user or false if not 
    // ──────────────────────────────────────────────────
    //

    
    public function favorited(){

    return (bool) Favorite::where('user_id', Auth::id())
                        ->where('post_id', $this->id)
                        ->first();
}

}
