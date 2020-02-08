<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
    	$user = User::all();

    	return response()->json($user, 200);
    }

    public function store(Request $request)
    {
        $acceptHeader = $request->header('Accept');
        if($acceptHeader == 'application/json' || $acceptHeader === 'application/xml'){
            $input = $request->all();

            $validationRules =[
                'usernama'=> 'required|min:2',
                'password'=> 'required|min:3',
                'email'=>'required|min:8'
            ];
            $validator = \validator::make($input, $validationRules);
            if($validator->fails()){
                return response()->json($validator->errors(), 400);
            }
        }
        $input = $request->all();
        $user = User::create($input);

        return response($user, 200);
    }
    

     public function show($id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json(['message' => 'data not found']);
        }
        return response()->json($user, 200);
    }

    public function update(Request $request, $id)
    {
        $acceptHeader = $request->header('Accept');
        if($acceptHeader == 'application/json' || $acceptHeader === 'application/xml'){
            $input =$request->all();
            $user =User::find($id);

            if(!$user){
                abort(404);
            }
            $validationRules =[
                'usernama'=> 'required|min:2',
                'password'=> 'required|min:3',
                'email'=>'required|min:8'
            ];
            $validator = \validator::make($input, $validationRules);
            if($validator->fails()){
                return response()->json($validator->errors(), 400);
        }
}

        $input = $request->all();
        $user = User::find($id);
        if (!$user) {
            return response()->json(['message' => 'data not found']);
        }
        $user->fill($input);
        $user->save();
        return response()->json($user, 200);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json(['message' => 'data not found']);
        }
        $user->delete();
        return response()->json([
            'message' => 'delete successfully',
            'user_id' => $id
        ]);
    }

}

