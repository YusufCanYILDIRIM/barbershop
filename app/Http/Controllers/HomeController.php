<?php

namespace App\Http\Controllers;

use App\Models\HomeContent;
use App\Models\Service;
use App\Models\Story;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Ana sayfa içeriği için en son eklenen kaydı al
        $content = HomeContent::latest()->first();

        $stories = Story::latest()->take(2)->get();
        $services = Service::all();

        return view('welcome', compact('content','stories', 'services'));
    }
}
