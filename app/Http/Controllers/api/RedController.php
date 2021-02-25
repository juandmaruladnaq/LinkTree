<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Red;
use Illuminate\Http\Request;
use App\Http\Requests\RedRequest;


class RedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $reds = Red::orderBy('label', 'asc')->get();

        return response()->json(
            ['data' => $reds],
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
        $red = Red::create($request->all());

        return response()->json(
            ['data' => $red], 
            201);


        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Red  $red
     * @return \Illuminate\Http\Response
     */
    public function show(Red $red)
    {
        return response()->json(
            ['data' => $red], 
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