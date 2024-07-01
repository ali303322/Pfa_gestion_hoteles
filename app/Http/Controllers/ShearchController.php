<?php

namespace App\Http\Controllers;

use App\Models\Hotels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShearchController extends Controller
{
    function show(request $request) {
        $Hotels = Hotels::where('city',$request->city)->get();
        $city = Hotels::select('city',DB::raw('count(*) as total'))->where('city',$request->city)->groupBy('city')->get();
        return view('HotelFilter',['Hotels' => $Hotels , 'city' => $city]);
    }
}
