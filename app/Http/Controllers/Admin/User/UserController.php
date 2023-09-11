<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index (Request $request)
    {
        return view('admin.users.index');
    }

    public function block(Request $request)
    {

    }

}
