<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;


class TweetController extends Controller
{
    public function get(){
        $tweets = Tweet::get();
        logger($tweets);
        return response()->json($tweets);
    }
}
