<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Minutes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MinutesController extends Controller
{
    public function index()
    {
        $minutes = Minutes::get();
        $totalMinutes = 0;
        foreach ($minutes as $min)
        {
            $totalMinutes += $min->minutes;
        }
        return view('admin.layouts.minutes', compact('minutes', 'totalMinutes'));
    }


    public function store(Request $request, Minutes $minutes)
    {
        $this->validate($request, [
            'project' => 'required',
            'minutes' => 'required',
            'desc' => 'required|max:1',
        ]);

        $minutes->user_id = Auth::id();
        $minutes->project_id = $request->project;
        $minutes->minutes = $request->minutes;
        $minutes->description = $request->desc;

        return redirect(route('adminminutes'));
    }
}
