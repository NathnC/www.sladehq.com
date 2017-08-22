<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.welcome');
    }


    public function about()
    {
        return view('front.about');
    }

    public function login()
    {
        return view('front.login');
    }


    public function privacy()
    {
        return view('front.legal.privacy');
    }

    public function tos()
    {
        return view('front.legal.terms-of-service');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function portfolio()
    {
        return view('front.portfolio');
    }
}
