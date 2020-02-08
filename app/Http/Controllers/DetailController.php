<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;
use App\Models\Detail;

class DetailController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
    	$detail = Detail::all();

    	return response()->json($detail, 200);
    }

    public function store(Request $request)
    {
    	$input = $request->all();
    	$detail = Detail::create($input);

    	return response($detail, 200);
    }
 public function show($id)
    {
        $detail =  Detail::find($id);
        if (!$detail) {
            return response()->json(['message' => 'data not found']);
        }
        return response()->json($detail, 200);
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $detail =  Detail::find($id);
        if (!$detail) {
            return response()->json(['message' => 'data not found']);
        }
        $detail->fill($input);
        $detail->save();
        return response()->json($detail, 200);
    }

    public function destroy($id)
    {
        $detail =  Detail::find($id);
        if (!$detail) {
            return response()->json(['message' => 'data not found']);
        }
        $detail->delete();
        return response()->json([
            'message' => 'delete successfully',
            'detail_id' => $id
        ]);
    }
}