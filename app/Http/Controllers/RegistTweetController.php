<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistTweetController extends Controller
{
    public function show(){
        return view('registtweet.show');
    }
    public function upsert(Request $request){
        logger($request->file());
        logger($request);
        foreach($request['files'] as $val){
            logger($val);
        }

    }
}
