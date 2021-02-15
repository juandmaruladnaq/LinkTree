<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Red;
use App\Models\Link;
use App\Http\Requests\RedRequest;
use App\Http\Requests\LinkRequest;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $links = Link::ownedBy(Auth::id())->simplePaginate(5);
        $reds = Red::ownedBy(Auth::id())->simplePaginate(5);

        return view('profile', compact('links'), compact('reds'));
        /* return view('profile'); */
    }
}
