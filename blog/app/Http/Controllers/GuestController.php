<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function category()
    {
        return view('category');
    }
    public function post()
    {
        return view('post');
    }
}
