<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Team;
use App\User;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function index()
    {
        $team_design = User::where('team_id', '2')->get();
        $team_digital = User::where('team_id', '1')->get();
        $team_technical = User::where('team_id', '3')->get();

        $tinfo_design = Team::where('id', '2')->first();
        $tinfo_digital = Team::where('id',  '1')->first();
        $tinfo_technical = Team::where('id', '3')->first();

        return view('admin.layouts.teams',compact('team_design', 'team_digital', 'team_technical', 'tinfo_design', 'tinfo_digital', 'tinfo_technical'));
    }
}
