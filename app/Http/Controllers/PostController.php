<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create_post()
    {
        return view('posts.index');
    }

    public function store_post(Request $request)
    {
        // dd(request()->all());
        // return $request;

        $validate_data = $request->validate([

            'title' => ['required'],
            'content' => ['required'],
        ]);

        $data = Post::create([

            'title' => $validate_data['title'],
            'content' => $validate_data['content'],

        ]);

        return redirect('/show');
        //  return $data;
        // if(is_null($data)) return response()->json(['msg' => 'failed to create'], 400);
        // return response()->json(['msg' => 'successfully added user'], 200);

    }

    public function show_post()
    {
        $post = Post::paginate(4);
        return view('posts.show', ['posts' => $post]);
    }

    public function search_post(Request $request)
    {
        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        // $posts = Post::query()
        //     ->where('title', 'LIKE', "%{$search}%")
        //     ->orWhere('body', 'LIKE', "%{$search}%")
        //     ->get();

        $post = Post::where('title', $search)->get();
        return view('posts.show', ['posts' => $post]);
    }

    public function update_view(Post $id)
    {
        return view('posts.edit', ['post' => $id]);
    }

    public function update_post(Request $request, $id)
    {
        $data = Post::find($id);
        // return $data;

        $data->update([
             'title' => $request->title,
             'content' => $request->content,
        ]);

        return redirect('/show');
    }

    public function delete_view(Post $id)
    {
        return view('posts.delete', ['post' => $id]);
    }

    public function delete_post($id)
    {
        $post_data = Post::where('id',$id)->delete();

        return redirect('/show');
    }
}
