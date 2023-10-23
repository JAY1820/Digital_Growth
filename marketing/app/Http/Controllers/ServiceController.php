<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Service; // Import the Service model
// use App\Service; 

class ServiceController extends Controller
{
    public function create()
    {
        return view('addtocart'); // Display the form view
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'service_id' => 'required|string|max:255',
            'plan_name' => 'required|string',
            'plan_description' => 'required|string',
            'plan_price' => 'required|numeric',
        ]);

        Service::create($data); // Store the data in the "service" table

        return redirect()->route('addtocart'); // Redirect to the form page
    }
}
