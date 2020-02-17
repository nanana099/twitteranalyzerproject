<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TweetListController extends Controller
{
    public function show(){
        return view('tweetlist.show');
    }
}