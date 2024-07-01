<?php

namespace App\Http\Controllers;

use App\Mail\SendConformationMail;
use App\Models\Hotels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class PaymentController extends Controller
{
    function index($id) {
        $ho = Hotels::where('id',$id)->get();
        return view('Payment.payment',['id' => $id , 'ho' => $ho]);
    }

    function sendEmail(request $request){


        $email = $request->input('email');
        $ArrivDate = $request->input('Arive-Date');

        $Message = "Bonjour nous vont vous informer que le traitment de payment et bien passer nous vous attend le $ArrivDate  " ;

        if ($email) {
            Mail::to($email)->send(new SendConformationMail($Message));
            return view('Payment.Validation')->with('success', 'Payment processed successfully');
        } else {
            return view('Payment.Validation')->with('error', 'Invalid email address');
        }



    }
}
