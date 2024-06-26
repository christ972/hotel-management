<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ReservationRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $reservations = Reservation::paginate();

        return view('reservation.index', compact('reservations'))
            ->with('i', ($request->input('page', 1) - 1) * $reservations->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $reservation = new Reservation();

        return view('reservation.create', compact('reservation'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReservationRequest $request): RedirectResponse
    {
        Reservation::create($request->validated());

        return Redirect::route('reservations.index')
            ->with('success', 'Reservation created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $reservation = Reservation::find($id);

        return view('reservation.show', compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $reservation = Reservation::find($id);

        return view('reservation.edit', compact('reservation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReservationRequest $request, Reservation $reservation): RedirectResponse
    {
        $reservation->update($request->validated());

        return Redirect::route('reservations.index')
            ->with('success', 'Reservation updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Reservation::find($id)->delete();

        return Redirect::route('reservations.index')
            ->with('success', 'Reservation deleted successfully');
    }
}
