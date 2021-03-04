<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class adminController extends Controller
{
    public function profile(){
        return view('admin.profile');
    }

    public function info(){
        $users= User::get();
        return view('admin.infousers',['users'=>$users]);
    }

    public function notification(){
        $notifications = DB::table('messages')->get();
        return resources(['notifications'=>$notifications]);
    }
}
