<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index (Request $request)
    {
        $users = User::where('is_blocked',0)->where('is_active',1)->get();
        return view('admin.users.index',compact('users'));
    }

    public function block(Request $request)
    {

    }

}
