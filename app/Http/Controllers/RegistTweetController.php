<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CSVimporter;
use App\Services\TwitterAnalyticsCSV;
use App\Tweet;

class RegistTweetController extends Controller
{
    public function show(){
        return view('registtweet.show');
    }
    public function upsert(Request $request){
        $csvImporter = new CSVimporter(new TwitterAnalyticsCSV());
        foreach($request['files'] as $val){
            $oneCsvFileContentArray = $csvImporter->import($val);
            Tweet::insert($oneCsvFileContentArray);
        }
    }
}
