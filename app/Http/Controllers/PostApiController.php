<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Post;

class PostApiController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(6);
        return PostResource::collection($posts);
    }

    public function show($id)
    {
        $post = Post::find($id);
        return new PostResource($post);
    }

}
