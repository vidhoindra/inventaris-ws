<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;
use App\Models\Good;

class GoodController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
    	$good = Good::all();

    	return response()->json($good, 200);
    }

    public function store(Request $request)
    {
    	$input = $request->all();
    	$good = Good::create($input);

    	return response($good, 200);
    }

     public function show($id)
    {
        $goods = Good::find($id);
        if (!$goods) {
            return response()->json(['message' => 'data not found']);
        }
        return response()->json($goods, 200);
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $goods = Good::find($id);
        if (!$goods) {
            return response()->json(['message' => 'data not found']);
        }
        $goods->fill($input);
        $goods->save();
        return response()->json($goods, 200);
    }

    public function destroy($id)
    {
        $goods = Good::find($id);
        if (!$goods) {
            return response()->json(['message' => 'data not found']);
        }
        $goods->delete();
        return response()->json([
            'message' => 'delete successfully',
            'goods_id' => $id
        ]);
    }

}

