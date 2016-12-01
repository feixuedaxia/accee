<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Calendar;
use Illuminate\Http\Request;

class ApiCalendarController extends Controller
{
    public function index()
    {
        return Calendar::all();
    }

    public function store(Request $request)
    {
    	// dd($request->all());
        return Calendar::create($request->all());
    }

    public function show($id)
    {
        return Calendar::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        Calendar::findOrFail($id)->update($request->all());
        return Response::json($request->all()); //response()->json()
    }

    public function destroy($id)
    {
        return Calendar::destroy($id);
    }
}


