<?php

namespace App\Http\Controllers;

// il faut pas oublier l'autocomplétion.
use App\Models\Reservation;
use Illuminate\Contracts\View\View as ViewView;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $reservations = Reservation::all();

        return view('reservations.index', ["reservations" => $reservations]);
    }

    public function create()

    {
        return view('reservations.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "firstname" => "string",
            "lastname" => "string",
            "date" => "date",
            "people" => "numeric|min:1",
        ], [
            "firstname.string" => "Le nom est invalide.",
            "lastname.string" => "Le prénom est invalide.",
            "date.date" => "La date n'est pas complète.",
            "people.numeric" => "Le nombre de personne doit être un nombre.",
            "people.min" => "Le nombre de personne doit être supérieur à 1.",
        ]);

        Reservation::create([
            "firstname" => $request->firstname,
            "lastname" =>  $request->lastname,
            "date" =>  $request->date,
            "people" =>  $request->people,
        ]);

        return view('reservations.create-success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reservation = Reservation::findOrFail($id);

        return view('reservations.show', ["reservations" => $reservation]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $reservations = Reservation::findOrFail($id);

        return view('reservations.edit', ["reservations" => $reservations]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reservations = Reservation::findOrFail($id);

        $reservations->firstname = $request->firstname;
        $reservations->lastname = $request->lastname;
        $reservations->date = $request->date;
        $reservations->people = $request->people;

        $reservations->save();

        return view('reservations.modif');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservations = Reservation::findOrFail($id);
        $reservations->delete();

        return view('reservations.delete');
    }
}
