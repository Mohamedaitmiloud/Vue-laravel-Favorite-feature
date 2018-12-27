<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UsersController extends Controller
{

    //
    // ──────────────────────────────────────── 1 ──────────
    //   :::::: myFavorites method returns the favorites posts by the auth user
    // ──────────────────────────────────────────────────
    //

    

    public function myFavorites(){
    $myFavorites = Auth::user()->favorites;
    return view('users.my_favorites', ['myFavorites'=>$myFavorites]);
    }
}
