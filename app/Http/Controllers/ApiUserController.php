<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use App\Term;
use Illuminate\Http\Request;

class ApiUserController extends Controller
{

    public function index()
    {
        // return User::all();

        // $categories = [];

        // foreach (Term::all() as $category):
        //     $categories[$category->id]= $category->name;
        // endforeach;
        $categories = Term::pluck('name','id');
        return User::with('terms')->get();
    }

    public function store(Request $request)
    {
        return User::create($request->all());
    }

    public function show($id)
    {
        return User::findOrFail($id);
        // dd(User::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());

        // return redirect('/admin/users');

        User::findOrFail($id)->update($request->all());

        $user = User::findOrFail($id);

        $user->terms()->sync($request->input('selected'));

        // return redirect('/admin/users');
        // return Response::json($request->all()); //response()->json()
        return response()->json($request->all());
    }

    public function destroy($id)
    {
        User::findOrFail($id)->terms()->detach();
        return User::destroy($id);
    }

    public function edit($id)
    {
        //return Post::orderBy('created_at','desc')->first();

        $categories = Term::pluck('name','id');

        $user = User::findOrFail($id);

        $select = User::findOrFail($id)->terms->pluck('id');

        //return view('admin.post-edit', compact('post','categories'))->with(compact('categories'));

        // return view('admin.post-edit', compact('post','categories'));

        return compact('user','categories','select');

    }
}
