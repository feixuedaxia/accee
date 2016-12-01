<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Term;
use Illuminate\Http\Request;

class ApiCategoryController extends Controller
{
    public function index()
    {
        return Term::all();
    }

    public function store(Request $request)
    {
        return Term::create($request->all());
    }

    public function show($id)
    {
        return Term::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        Term::findOrFail($id)->update($request->all());
        return Response::json($request->all()); //response()->json()
    }

    public function destroy($id)
    {
        return Term::destroy($id);
    }
}


