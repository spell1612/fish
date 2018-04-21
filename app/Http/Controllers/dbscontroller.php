<?php

namespace fish\Http\Controllers;

use Illuminate\Http\Request;
use fish\fish;

class dbscontroller extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showdb()
    {
        $fish=new fish;
        $todo=$fish->all();
        return view('db-show',['asdf'=>$todo]);
    }

    public function deldb($idxyz)
    {
        $fish=fish::find($idxyz);
        $fish->delete();
        return back();
    }
}
