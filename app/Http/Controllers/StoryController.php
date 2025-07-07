<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;

class StoryController extends Controller
{
    public function index()
    {
        $stories = Story::all();
        return view('partials.about', compact('stories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'bio' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'facebook' => 'nullable|string',
            'instagram' => 'nullable|string',
            'whatsapp' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $data['image'] = 'data:' . $image->getMimeType() . ';base64,' . base64_encode(file_get_contents($image->getRealPath()));
        }

        Story::create($data);

        return redirect()->back()->with('success', 'Berber başarıyla eklendi!');
    }
}
