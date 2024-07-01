<?php

namespace App\Http\Controllers;

use App\Models\Hotels;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index(request $request){
        $email = $request->email ;
        $id = User::where('email', $email)->pluck('id')->first();
        $city = Hotels::select('city',DB::raw('count(*) as total'))->groupBy('city')->get();
        $hotels = Hotels::take(3)->get();
        return view('User.MainUser',['hotels' => $hotels , 'id' => $id,'city'=>$city]);
    }
}
