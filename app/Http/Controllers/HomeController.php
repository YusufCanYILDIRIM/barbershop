<?php

namespace App\Http\Controllers;

use App\Models\HomeContent;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $content = HomeContent::first(); //tek bir kayıt olucak
        return view('welcome', compact('content'));
    }
}
