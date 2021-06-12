<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    //
    public function sendContactUs(Request $request){
            $contactUs = New ContactUs($request->input());
            $contactUs->save();

             return redirect('/contact-us#Form')->with('success','Your Message has been Delivered Successfully!');

    }
}
