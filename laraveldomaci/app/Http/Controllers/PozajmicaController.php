<?php

namespace App\Http\Controllers;

use App\Http\Resources\PozajmicaResource;
use App\Models\Pozajmica;
use Illuminate\Http\Request;

class PozajmicaController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    //Definicija svih funkcija za Pozajmicu

    public function vratiSvePozajmice()
    {

        $pozajmica = Pozajmica::all();

        return PozajmicaResource::collection($pozajmica);

    }

    public function dodajPozajmicu()
    {

        request()->validate([

            'clan_id' => 'required',
            'knjiga_id' => 'required',
            'DaniPozajmljivanja' => 'required',
            'DatumVracanja' => 'required',

        ]);

        return Pozajmica::create([

            'clan_id' => intval(request('clan_id')),
            'knjiga_id' => intval(request('knjiga_id')),
            'DaniPozajmljivanja' => request('DaniPozajmljivanja'),
            'DatumVracanja' => request('DatumVracanja'),

        ]);

    }

    public function obrisiPozajmicu(Pozajmica $pozajmica)
    {
        $uspeh = $pozajmica->delete();

        return [
            'success' => $uspeh
        ];
    }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pozajmica $pozajmica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pozajmica $pozajmica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pozajmica $pozajmica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pozajmica $pozajmica)
    {
        //
    }
}