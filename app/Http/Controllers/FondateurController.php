<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fondateur;

class FondateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fondat=Fondateur::all();
        return response()->json($fondat);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'cin' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'tele' => 'required',
            'login' => 'required',
            'password' => 'required',
        ]);

        $fondat = new  Fondateur();
        $fondat ->cin = $request ->cin;
        $fondat ->nom = $request ->nom;
        $fondat ->prenom = $request ->prenom;
        $fondat ->tele = $request ->tele;
        $fondat ->login = $request ->login;
        $fondat ->password = $request ->password;
        $fondat->save();

        return response()->json($fondat, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fonda = Fondateur::findOrFail($id);
        $fonda->delete();
        return response()->json(['message' => 'Fondateur supprimé avec succès'], 200);

    }
}
