<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index(Request $request){
        return view('website.apply');
    }

    public function store(Request $request){
        // ContactRequest::create([
        //     'message'=>$request->message,
        //     'name'=>$request->name,
        //     'email'=>$request->email,
        //     'subject'=>$request->subject,
        // ]);
        // Session::flash('success','success');
        return redirect('/apply');
    }
}
