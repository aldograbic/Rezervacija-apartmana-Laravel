<?php

namespace App\Http\Controllers;

use App\Mail\ReservationConfirmation;
use App\Models\Apartment;
use App\Models\User;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $reservations = Reservation::all();
        return view('reservation');
    }

    public function reservation()
    {
        if (Auth::check()) {
            return view('reservation');
        }
        return redirect('/login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $apartment = Apartment::find($id);
        return view('reservation', ['apartment' => $apartment]);
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reservation = new Reservation();
        $reservation->from_date = $request->from_date;
        $reservation->to_date = $request->to_date;
        $reservation->number_of_adults = $request->number_of_adults;
        $reservation->number_of_kids = $request->number_of_kids;
        $reservation->full_price = $request->full_price;
        $reservation->apartment_id = $request->apartment_id;
        $reservation->user_id = Auth::id();

        $reservation->save();
        session()->flash('message', 'Rezervacija uspješno napravljena!');

        $reservationDetails = [
        'from_date' => $reservation->from_date,
        'to_date' => $reservation->to_date,
        'number_of_adults' => $reservation->number_of_adults,
        'number_of_kids' => $reservation->number_of_kids,
        'full_price' => $reservation->full_price
        ];
        Mail::to(Auth::user()->email)->send(new ReservationConfirmation($reservationDetails));
        return view('index');
    }
}
