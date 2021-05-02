<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class login extends Controller
{
    public function index(){
        return view('admin.login');
    }

    public function check(Request $request){



        $this->validate($request, [
           'email'=>'required|email',
           'password'=>'required',
        ]);

        $AdminInfo = Admin::where('email','=',$request->email)->first();

        if(!$AdminInfo) {
            return back()->with('status', 'Email invalid');
        }else{
            if (Hash::check($request->password, $AdminInfo->password)){
                $request->session()->put('LoggedAdmin', $AdminInfo->id);
                return redirect()->route('admin.dashboard');
            }else{
                return back()->with('status', 'Incorect Password');
            }
        }




    }
}
