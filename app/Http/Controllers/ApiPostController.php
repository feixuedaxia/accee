<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Post;
use App\Term;
use Illuminate\Http\Request;

class ApiPostController extends Controller
{
    public function index()
    {	

        return Post::with('user','terms')->get();
        // $posts= Post::with('user')->with('terms')->get();
        // return var_dump($posts);
    }

    public function store(Request $request)
    {
    	
    	$article = \Auth::user()->posts()->create($request->all()); 

        //$article->terms()->sync($request->input('categories'));
        $article->terms()->attach($request->input('categories'));


        $post=Post::orderBy('created_at','desc')->first();

        //$id=$post->id;

        //return $id;

        //return view('admin.post-edit', compact('post'));

        return redirect()->route('edit', [$post]);
        // return redirect()->action(
        // 'ApiPostController@edit', ['id' => $id]
        // );
    }


    public function show($id)
    {
        return Post::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        Post::findOrFail($id)->update($request->all());

        $article = Post::findOrFail($id);

        $article->terms()->detach();

        $article->terms()->attach($request->input('categories'));

        return redirect('/admin/all-post');
         //return redirect()->route('edit', [$id]);
        // return Response::json($request->all()); //response()->json()
    }

    public function destroy($id)
    {
        Post::findOrFail($id)->terms()->detach();
        return Post::destroy($id);
    }

    public function lastpost()
    {
        //return Post::orderBy('created_at','desc')->first();

        $post = Post::orderBy('created_at','desc')->first();

        $id=$post->id;

        return $id;

    }

    public function edit($id)
    {
        //return Post::orderBy('created_at','desc')->first();

        // $categories = [];

        // foreach (Term::all() as $category):
        //     $categories[$category->id]= $category->name;
        // endforeach;

        $categories = Term::pluck('name','id');

        $post = Post::findOrFail($id);

        $select = Post::findOrFail($id)->terms->first()->id;


        return view('admin.post-edit', compact('post','categories'))->with(compact('select'));

    }
}


