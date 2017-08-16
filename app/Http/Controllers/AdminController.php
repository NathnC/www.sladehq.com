<?php

namespace App\Http\Controllers;

use App\User;
use Request;


class AdminController extends Controller
{
    public function index()
    {
        $members = User::count();
        return view('admin.welcome', compact('members'));
    }

    public function login()
    {
        $ipaddress = Request::ip();
        return view('admin.login', compact('ipaddress'));
    }


    public function members()
    {
        return view('admin.layouts.members');
    }
}
