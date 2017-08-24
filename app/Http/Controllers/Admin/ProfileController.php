<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Minutes;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $minutes = Minutes::where('user_id', Auth()->user()->id)->get();
        $totalMinutes = 0;
        foreach ($minutes as $min)
        {
            $totalMinutes += $min->minutes;
        }
        return view('admin.layouts.profile', compact('minutes', 'totalMinutes'));
    }
}
