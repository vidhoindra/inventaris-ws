<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;
use App\Models\Work;

class WorkController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
    	$work = Work::all();

    	return response()->json($work, 200);
    }

    public function store(Request $request)
    {
    	$input = $request->all();
    	$work = Work::create($input);

    	return response($work, 200);
    }

    public function show($id)
    {
        $works = Work::find($id);
        if (!$works) {
            return response()->json(['message' => 'data not found']);
        }
        return response()->json($works, 200);
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $works = Work::find($id);
        if (!$works) {
            return response()->json(['message' => 'data not found']);
        }
        $works->fill($input);
        $works->save();
        return response()->json($works, 200);
    }

    public function destroy($id)
    {
        $works = Work::find($id);
        if (!$works) {
            return response()->json(['message' => 'data not found']);
        }
        $works->delete();
        return response()->json([
            'message' => 'delete successfully',
            'works_id' => $id
        ]);
    }
}

