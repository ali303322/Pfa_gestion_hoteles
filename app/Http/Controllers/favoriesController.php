<?php

namespace App\Http\Controllers;

use App\Models\Hotels;
use App\Models\User;
use Illuminate\Http\Request;

class favoriesController extends Controller
{
    function index() {
        //
    }

    public function show($id)
    {
        $user = User::with('favorites')->find($id);
        $filtre = $user->favorites->pluck('id_hotel');
        $hotels = Hotels::whereIn('id', $filtre)->get();
        if ($user) {
            return view('User.Favories', compact('user','hotels'));
        } else {
            return redirect()->route('home')->with('error', 'User not found');
        }
    }
}
