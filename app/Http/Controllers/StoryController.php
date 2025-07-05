<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function index()
    {
        $stories = \App\Models\Story::all();
        return view('partials.about', compact('stories'));
    }
}
