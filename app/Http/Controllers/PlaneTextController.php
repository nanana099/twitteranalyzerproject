<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaneTextController extends Controller
{
    public function showTokusho(){
        return view('planeText.tokusho');
    }
    public function showPrivacyPolicy(){
        return view('planeText.privacyPolicy');

    }
    public function showRule(){
        return view('planeText.rule');

    }
}
