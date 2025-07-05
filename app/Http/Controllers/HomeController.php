<?php

namespace App\Http\Controllers;

use App\Models\HomeContent;
use App\Models\Story;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $content = HomeContent::first(); //tek bir kayıt olucak
        $stories = Story::all();
        return view('welcome', compact('content','stories'));
    }
}
