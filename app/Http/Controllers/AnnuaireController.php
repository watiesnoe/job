<?php

namespace App\Http\Controllers;

use App\Models\Annuaire;
use App\Http\Requests\StoreAnnuaireRequest;
use App\Http\Requests\UpdateAnnuaireRequest;

class AnnuaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
    public function store(StoreAnnuaireRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Annuaire $annuaire)
    {
        //
    }
    public  function avocat(){
        //        dd('kk');

        return view("annuaires.avocat");
    }

    public  function huissier(){
        //        dd('kk');

        return view("annuaires.huissier");
    }

    public  function abonnement(){
        //        dd('kk');

        return view("annuaires.abonnement");
    }

    public  function expert(){
        //        dd('kk');

        return view("annuaires.expert");
    }

    public  function justice(){
        //        dd('kk');

        return view("annuaires.justice");
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Annuaire $annuaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAnnuaireRequest $request, Annuaire $annuaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Annuaire $annuaire)
    {
        //
    }
}
