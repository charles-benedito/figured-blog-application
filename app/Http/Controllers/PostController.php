<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function create()
    {
        return view('postcreate');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required',
            'title' => 'required',
            'text' => 'required',
        ]);

        $post=new Post();
        $post->user_id = $request->get('user_id');
        $post->title = $request->get('title');
        $post->text = $request->get('text');
        $post->save();
        return redirect('post')->with('success', 'Added with success');
    }

    public function index()
    {
        $posts=Post::all();
        return view('postindex',compact('posts'));
    }
    public function edit($id)
    {
        $post = Post::find($id);
        return view('postedit',compact('post','id'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'text' => 'required',
        ]);

        $post= Post::find($id);
        $post->title = $request->get('title');
        $post->text = $request->get('text');
        $post->save();
        return redirect('post')->with('success', 'Update with success');
    }
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('post')->with('success','Deleted with success');
    }
}
