<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Link;
use Illuminate\Http\Request;
use App\Http\Requests\LinkRequest;


class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $links = Link::orderBy('label', 'asc')->get();

        return response()->json(
            ['data' => $links],
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
        $link = Link::create($request->all());

        return response()->json(
            ['data' => $link], 
            201);



        //$link = new Link();
        //$link->user_id = 1;
       // $link->label = $request->label;
       // $link->url = $request->url;
        //$link->save();
        //return response()->json(
          //  ['data' => $link], 
           // 201);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function show(Link $link)
    {
        return response()->json(
            ['data' => $link], 
            200);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Link $link)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function destroy(Link $link)
    {
        //
    }
}
