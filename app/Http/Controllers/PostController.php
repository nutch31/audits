<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    //
    public function post(Request $request)
    {
        $Post = Post::create(['title' => 'Laravel Version 5.7', 'body' => 'MY Name Is Nut Chantathab',
        'user_type' => 'Admin', 'user_id' => '1']);
    }

    public function edit(Request $request)
    {
        $Post = Post::find(1);

        $Post->title = 'Laravel Version 5.8';

        $Post->save();

    }

    public function delete(Request $request)
    {
        $Post = Post::find(1);
        $Post->delete();
    }
}
