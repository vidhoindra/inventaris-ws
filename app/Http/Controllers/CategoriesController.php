<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
    	$categories = Category::all();

    	return response()->json($categories, 200);
    }

    public function store(Request $request)
    {
    	$input = $request->all();
    	$categories = Category::create($input);

    	return response($categories, 200);
    }
     public function show($id)
    {
        $categories = Category::find($id);
        if (!$categories) {
            return response()->json(['message' => 'data not found']);
        }
        return response()->json($categories, 200);
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $categories = Category::find($id);
        if (!$categories) {
            return response()->json(['message' => 'data not found']);
        }
        $categories->fill($input);
        $categories->save();
        return response()->json($categories, 200);
    }

    public function destroy($id)
    {
        $categories = Category::find($id);
        if (!$categories) {
            return response()->json(['message' => 'data not found']);
        }
        $categories->delete();
        return response()->json([
            'message' => 'delete successfully',
            'categories_id' => $id
        ]);
    }

}

