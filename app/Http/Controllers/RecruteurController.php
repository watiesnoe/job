<?php

namespace App\Http\Controllers;

use App\Models\Recruteur;
use App\Http\Requests\StoreRecruteurRequest;
use App\Http\Requests\UpdateRecruteurRequest;

class RecruteurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('recruteurs.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public  function avocat(){
        //        dd('kk');

        return view("recruteurs.avocats.avocat");
    }

    public  function huissier(){
        //        dd('kk');

        return view("recruteurs.huissiers.huissier");
    }

    public  function abonnement(){
        //        dd('kk');

        return view("recruteurs.abonnement.abonnementApp");
    }

        public  function expert(){
        //        dd('kk');

        return view("recruteurs.experts.index");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRecruteurRequest $request)
    {
        //
    }

    public function recrutement(){
         return view("recruteurs.recrutement.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Recruteur $recruteur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recruteur $recruteur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRecruteurRequest $request, Recruteur $recruteur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recruteur $recruteur)
    {
        //
    }
}
