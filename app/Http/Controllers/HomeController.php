<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function show(){
        $posts= Post::latest()->paginate(3);
        return view('home',['posts'=>$posts]);
    }
}
