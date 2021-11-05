<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use App\Models\Image;

class TestController extends Controller
{
    public  function index()
    {
        $users = User::with('phones')->get();
        $comments = Comment::with('post')->where('comment','First comment')->get();
        $post = Post::query()->get()->take(1);
        $image = Image::find(1);

        dd($comments,$users,$post,$image);
    }
}
