<?php

namespace App\Http\Controllers;

use App\Mail\MailTrapExample;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getTest()
    {
//        Mail::to('ilsedemey1@gmail.com')->send(new MailtrapExample());
//        dd("gelukt");
        return view('home');
    }
}
