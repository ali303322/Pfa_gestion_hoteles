<?php

namespace App\Http\Controllers;

use App\Models\Hotels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeComtroller extends Controller
{
    public function index(){
        $hotels = Hotels::take(3)->get();
        $citys = Hotels::select('city', DB::raw('count(*) as total'))
        ->groupBy('city')
        ->get();
        return view("index",['hotels' => $hotels , 'city' => $citys]);
    }

    public function HotelDescription($id){
        $specifiqueHotel = Hotels::find($id);
        return view('HotelDescrption',['id' => $specifiqueHotel->id , 'specifiqueHotel' => $specifiqueHotel]);
    }

}
