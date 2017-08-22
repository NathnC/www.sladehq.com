<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Project;
use App\User;
use App\Minutes;
use Illuminate\Http\Request;


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
        return view('admin.login', compact('ipaddress'));
    }


    public function members()
    {
        $members = User::orderBy('leader', 'DESC')->get();
        return view('admin.layouts.members', compact('members'));
    }
}
