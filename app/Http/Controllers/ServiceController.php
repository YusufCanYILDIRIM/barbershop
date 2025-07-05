<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        // Fetch all services from the database
        $services = Service::all();
        
        // Return the view with the services data
        return view('partials.services', compact('services'));
    }
}
    
