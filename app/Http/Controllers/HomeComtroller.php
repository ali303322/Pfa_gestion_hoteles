<?php

namespace App\Http\Controllers;

use App\Models\Hotels;
use Illuminate\Http\Request;

class HomeComtroller extends Controller
{
    public function index(){
        $hotels = Hotels::take(3)->get();
        return view("index",['hotels' => $hotels]);
    }

    public function HotelDescription($id){
        $specifiqueHotel = Hotels::find($id);
        return view('HotelDescrption',['id' => $specifiqueHotel]);
    }

}
