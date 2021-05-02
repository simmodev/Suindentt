<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Models\Sub;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Dashboard extends Controller
{
    public function index(){
        $data = Sub::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.Dashboard', ['data'=>$data]);
    }


}
