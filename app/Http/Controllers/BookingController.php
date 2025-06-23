<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
    {
         $request->validate
         ([
            'full_name' => 'required|string|max:255',
            'mobile' => 'required|string|max:15',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'branch' => 'required|string|max:255',
            'number_of_people' => 'required|integer|min:1',
            'comments' => 'nullable|string|max:500',
        ]);

        Booking::create($request->all());

        return redirect()->back()->with('success', 'Booking created successfully.');
    }
   
}
