<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Sub;
use Illuminate\Http\Request;

class SubController extends Controller
{
    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required|max:255',
            'PhoneNumber'=>'required|numeric|min:10',
            'email'=>'required|email|max:255'
        ]);

        Sub::create([
            'name'=>$request->name,
            'PhoneNumber'=>$request->PhoneNumber,
            'email'=>$request->email,
        ]);

        return redirect('/');
    }
}
