<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Http\Requests\UserRequest;
class UserController extends Controller
{
    public function index()
    {
         $users = User::ownedBy(Auth::id())->simplePaginate(5);
          return view('users.edit', compact('user'));
       
    }
     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {
        $user->picture = $request->input('label');
        $user->save();

        return redirect(route('users.edit'))->with('_success', '¡foto editada exitosamente!');
    }//
}
