<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;

class PostController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $id = Auth::id();
        return '===> '.$id;
    }

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
