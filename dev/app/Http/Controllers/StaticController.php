<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;



class StaticController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function login()
    {
        return view('login');
    }

    public function contact()
    {
        return view('register');
    }
}
