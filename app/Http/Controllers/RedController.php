<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Red;
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
         $reds = Red::ownedBy(Auth::id())->simplePaginate(5);
          return view('redes.index', compact('reds'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('redes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RedRequest $request)
    {
        $red = new Red();
        $red->label = $request->input('label');
        $red->url = $request->input('url');
        $red->user_id = Auth::id();
        $red->save();

        return redirect(route('reds.index'))->with('_success', '¡Red social creada exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Red $red)
    {
        return view('redes.show', compact('red'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Red $red)
    {
        return view('redes.edit', compact('red'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RedRequest $request, Red $red)
    {
        $red->label = $request->input('label');
        $red->url = $request->input('url');
        $red->save();

        return redirect(route('reds.index'))->with('_success', '¡Red social editada exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Red $red)
    {
        if($red->owner->id == Auth::id())
        {
            $red->delete();

            return back()->with('_success', '¡Red social borrada exitosamente!');
        }
        
        return back()->with('_failure', '¡No tiene permiso de borrar ese recurso!');
    }
}
