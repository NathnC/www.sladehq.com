<?php

namespace App\Http\Controllers;

use App\Project;
use App\User;
use App\Minutes;
use Request;


class AdminController extends Controller
{
    public function index()
    {
        $members = User::orderBy('leader', 'DESC')->get();
        $projects = Project::where('status', 1)->get();
        $minutes = Minutes::get();
        $totalMinutes = 0;
        foreach ($minutes as $min)
        {
            $totalMinutes += $min->minutes;
        }
        return view('admin.welcome', compact('members', 'projects', 'minutes', 'totalMinutes'));
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
