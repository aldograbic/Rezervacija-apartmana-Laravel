<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentDescriptionController extends Controller
{
    public function index()
    {
        $apartments = Apartment::all();
        return view('apartment-description', compact('apartments'));
    }

    public function show($id)
    {
        $apartment = Apartment::find($id);
        return view('apartment-description', ['apartment' => $apartment]);
    }
}
