<?php

namespace App\Http\Controllers;

use App\Http\Controllers\controller;

class homeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}
