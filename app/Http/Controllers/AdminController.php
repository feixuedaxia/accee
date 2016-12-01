<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Term;
use App\Post;
use App\Http\Requests;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('admin.layout');
    }

    public function calendar()
    {
        return view('admin.calendar');
    }
    public function calendar_add()
    {
        return view('admin.calendar-add');
    }

    public function library()
    {
        return view('admin.library');
    }
    public function addmedia()
    {
        return view('admin.addmedia');
    }

    public function post_all()
    {
        return view('admin.post-all');
    }
    public function add()
    {       
        // $categories = [];

        // foreach (Term::all() as $category):
        //     $categories[$category->id]= $category->name;
        // endforeach;

        $categories = Term::pluck('name','id');

        return view('admin.add-new', compact('categories'));
    }
    public function category()
    {
        return view('admin.category');
    }



    public function test(Request $request)
    {
        return Post::create($request->all());
    }
}
