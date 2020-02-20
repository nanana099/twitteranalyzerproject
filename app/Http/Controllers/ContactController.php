<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showInquiry()
    {
        return view('contact.inquiry');
    }
    public function postInquiry(Request $request)
    {
        return view('contact.inquiry');
    }
}
