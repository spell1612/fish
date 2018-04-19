<?php

namespace fish\Http\Controllers;

use Illuminate\Http\Request;
use fish\fish;

class fishcontroller extends Controller
{
    //
    public function savefish(Request $formval){
        $fish1= new todotable;
        $fish1->userid=$textval->uid;
        $fish1->password=$textval->pass;
        $fish1->save();
        echo "data saved";
        return back();
    }
}
