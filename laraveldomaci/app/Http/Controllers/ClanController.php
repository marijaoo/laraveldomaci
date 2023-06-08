<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClanResource;
use App\Models\Clan;
use Illuminate\Http\Request;

class ClanController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    //Funkcije


    public function vratiSveClanove()
    {
        $clans = Clan::all();
        return ClanResource::collection($clans);
    }

    public function dodajClana()
    {

        request()->validate([

            'Ime' => 'required',
            'Prezime' => 'required',
            'ClanskaKarta' => 'required',
            'DatumIsteka' => 'required',

        ]);

        return Clan::create([

            'Ime' => request('Ime'),
            'Prezime' => request('Prezime'),
            'ClanskaKarta' => request('ClanskaKarta'),
            'DatumIsteka' => request('DatumIsteka'),

        ]);

    }

    public function obrisiClana(Clan $clan)
    {
        $uspeh = $clan->delete();

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
    public function show(Clan $clan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clan $clan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Clan $clan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clan $clan)
    {
        //
    }
}