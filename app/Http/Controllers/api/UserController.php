<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RedRequest;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $users = User::orderBy('name', 'asc')->get();

        return response()->json(
            ['data' => $users],
            200);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create($request->all());

        return response()->json(
            ['data' => $user], 
            201);


        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Red  $red
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return response()->json(
            ['data' => $user], 
            200);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Red  $red
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Red $red)
    {
        $red->update($request->all());

        return response()->json(
            ['data' => $red],
            200);//
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Red  $red
     * @return \Illuminate\Http\Response
     */
    public function destroy(Red $red)
    {
        $red->delete();
        return response(null, 204);
        //
    }
}