<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class Users extends Controller
{
    //
    public function index(){
        return Post::all();
    }
}
