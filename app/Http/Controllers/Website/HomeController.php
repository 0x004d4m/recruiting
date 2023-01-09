<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index(Request $request){
        return view('website.home');
    }

    public function store(Request $request){
        ContactRequest::create([
            'message'=>$request->message,
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
        ]);
        Session::flash('success','success');
        return redirect('/#contact');
    }
}
