<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apartment;
use Illuminate\Support\Facades\DB;

class ApartmentsPageController extends Controller
{
    public function index()
    {
        $apartments = Apartment::all();
        return view('apartments-page', compact('apartments'));
    }

    public function apartments(Request $request) {
        $from_date = $request->input('from_date');
        $to_date = $request->input('to_date');
        $apartments = DB::table('apartments')
        ->where('from_date', '<=', $from_date)
        ->where('to_date', '>=', $to_date)
        ->get();
        return view('apartments-page', ['apartments' => $apartments]);
    }
      
}
